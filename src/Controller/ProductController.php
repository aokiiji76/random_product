<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    /**
     * @Route("/", name="read_product")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/read.html.twig', [
            'product' => $productRepository->randomProduct(),
        ]);
    }
}
