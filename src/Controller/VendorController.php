<?php

namespace App\Controller;

use App\Entity\Vendor;
use App\Form\vendorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VendorController extends AbstractController
{
    /**
     * @Route("/vendor", name="vendor")
     */
    public function index(): Response
    {
        return $this->render('vendor/index.html.twig', [
            'controller_name' => 'VendorController',
        ]);
    }

    /**
     * @Route("/vendor/detail/{id}", name="vendor_detail")
     */
    public function vendorDetail ($id) {
        $vendor = $this->getDoctrine()->getRepository(vendor::class)->find($id);
        if ($vendor == null) {
            $this->addFlash("Error", "vendor not existed");
            return $this->redirectToRoute("vendor_index");
        } 
        return $this->render("vendor/detail.html.twig",
        [
            'vendor' => $vendor
        ]);
    }
    /**
     * @Route("author/authorDelete/{id}"), name="author_delete");
     */
    public function vendorDelete ($id) {
        $vendor = $this->getDoctrine()->getRepository(Vemder::class)->find($id);
        if ($vendor == null) {
            $this->addFlash("Error", "vendor delete failed");
        } else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($vendor);
            $manager->flush();
            $this->addFlash("Success", "vendor delete succeed");
        }
        return $this->redirectToRoute('vendor_index');
    }
    /**
     * @Route("vendor/add"), name="vendor_add");
     */
    public function authorAdd (Request $request) {
        $vendor = new Vendor();
        $form = $this->createForm(VendorType::class,$vendor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($vendor);
            $manager->flush();

            $this->addFlash("Success", "Add vendor succeed");
            return $this->redirectToRoute("vendor_index");
        }

        return $this->renderForm("vendor/add.html.twig",
        [
            'vendorForm' => $form
        ]);
}
}
