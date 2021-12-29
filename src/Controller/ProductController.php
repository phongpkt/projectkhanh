<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use function PHPUnit\Framework\throwException;

class ProductController extends AbstractController
{
    /**
     * @Route("/getproductlist", methods="GET", name="product_list_api")
     */
    public function getproductListAPI(): JsonResponse
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->json(['products' => $products], 200);
    }
    /**
     * @Route("/products", name="product_index")
     */
    public function productIndex()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        return $this->render(
            "product/index.html.twig",
            [
                'products' => $products
            ]
        );
    }
    /**
     * @Route("/product/detail/{id}", name="product_detail")
     */
    public function productDetail($id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if ($product == null){
            $this->addFlash("Error", "Product was not existed!");
            return $this->redirectToRoute('product_index');
        }
        return $this->render(
            "product/detail.html.twig",
            [
                'product' => $product
            ]
        );
    }
    /**
     * @Route("/product/delete/{id}", name="product_delete")
     */
    public function productDelete($id){
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if ($product == null){
            $this->addFlash("Error", "product delete failed!");
        }else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($product);
            $manager->flush();
            $this->addFlash("Success", "Product was deleted successfully!");
        }
        return $this->redirectToRoute('product_index');
    }
    /**
     * @Route("/product/add", name="product_add")
     */
    public function productAdd(Request $request){
        $product = new product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $image = $product->getPicture();
            $imgName = uniqid();
            $imgExtension = $image->guessExtension();
            $imageName = $imgName . "." . $imgExtension;
            try{
                $image->move(
                    $this->getParameter('product_picture'), $imageName
                );
            }catch(FileException $e){
                throwException($e);
            }
            $$product->setPicture($imageName);

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($product);
            $manager->flush();

            $this->addFlash("Success", "Add product succeed");
            return $this->redirectToRoute("product_index");
        }
        return $this->renderForm("product/add.html.twig",
        [
            'productForm' => $form
        ]);
    }
    /**
     * @Route("/product/edit/{id}", name="product_edit")
     */
    public function productEdit(Request $request, $id){
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $file = $form('picture')->getData();
            if($file != null){
                $image = $product->getPicture();
                $imgName = uniqid();
                $imgExtension = $image->guessExtension();
                $imageName = $imgName . "." . $imgExtension;
                try{
                    $image->move(
                        $this->getParameter('product_picture'), $imageName
                    );
                }catch(FileException $e){
                    throwException($e);
                }
                $$product->setPicture($imageName);
            }

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($product);
            $manager->flush();

            $this->addFlash("Success", "Edit product succeed");
            return $this->redirectToRoute("product_index");
        }
        return $this->renderForm("product/edit.html.twig",
        [
            'productForm' => $form
        ]);
    }
    /**
     * @Route("/product/sort/price/asc", name="sort_product_price_asc")
     */
    public function sortProductPriceAsc(ProductRepository $productRepository){
        $products = $productRepository->sortProductPriceAsc();
        return $this->render("product/index.html.twig",
        [
            'products' => $products
        ]);
    }
    /**
     * @Route("/product/sort/price/desc", name="sort_product_price_desc")
     */
    public function sortProductIdDesc(ProductRepository $productRepository){
        $products = $productRepository->sortProductPriceDesc();
        return $this->render("product/index.html.twig",
        [
            'products' => $products
        ]);
    }
    /**
     * @Route("/product/search", name="search_product_by_name")
     */
    public function searchProductByName(ProductRepository $productRepository, Request $request){
        $name = $request->get("name");
        $products = $productRepository->searchByName($name);
        return $this->render("product/index.html.twig",
        [
            'products' => $products
        ]);
    }
}
