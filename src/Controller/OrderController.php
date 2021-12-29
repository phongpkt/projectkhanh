<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order", name="order_index")
     */
    public function orderIndex(){
        $orders = $this->getDoctrine()->getRepository(Order::class)->findAll();
        return $this->render('/order/index.html.twig',
        [
            'order' => $orders
        ]);
    }
    /**
     * @Route("/order/detail/{id}", name="order_detail")
     */
    public function orderDetail ($id){
        $order = $this->getDoctrine()->getRepository(Order::class)->find($id);
        if ($order == null) {
            $this->addFlash("Error", "Order not exited");
            return $this->redirect("order_index");
        }
        return $this->render("order/detail.html.twig",
        [
            'order' => $order
        ]);
    }
    /**
     * @Route("/order/delete/{id}", name="order_delete")
     */
    public function orderDelete ($id){
        $order = $this->getDoctrine()->getRepository(Order::class)->find($id);
        if ($order == null) {
            $this->addFlash("Error", "Order delete failed");
        }else {
            $manager = $this->getDoctrine()->getManager();
            $manager->remove($order);
            $manager->flush();
            $this->addFlash("Success", "Order was deleted successfully!");
        }
        return $this->redirectToRoute('order_index');
    }
    /**
     * @Route("/order/add", name="order_add")
     */
    public function orderAdd(Request $request){
        $order = new Order();
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($order);
            $manager->flush();

            $this->addFlash("Success", "Add order succeed");
            return $this->redirectToRoute("order_index");
        }
        return $this->renderForm("order/add.html.twig",
        [
            'orderForm' => $form
        ]);
    }
    /**
     * @Route("/order/edit/{id}", name="order_edit")
     */
    public function orderEdit(Request $request, $id) {
        $order = $this->getDoctrine()->getRepository(Order::class)->find($id);
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) 
        {
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($order);
            $manager->flush();

            $this->addFlash("Success", "Edit order succeed");
            return $this->redirectToRoute("order_index");
        }
        return $this->renderForm("order/add.html.twig",
        [
            'orderForm' => $form
        ]);
    }
    /**
     * @Route("/order/sort/date/asc", name="sort_order_date_asc")
     */
    public function sortOrderDateAsc(OrderRepository $orderRepository){
        $orders = $orderRepository->sortOrderDateAsc();
        return $this->render("order/index.html.twig",
        [
            'orders' => $orders
        ]);
    }
    /**
     * @Route("/order/sort/date/desc", name="sort_order_date_desc")
     */
    public function sortOrderDateDesc(OrderRepository $orderRepository){
        $orders = $orderRepository->sortOrderDateDesc();
        return $this->render("order/index.html.twig",
        [
            'orders' => $orders
        ]);
    }
}
