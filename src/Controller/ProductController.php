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
     * @Route("/list", name="browse_product")
     */
    public function browse(ProductRepository $productRepository): Response
    {
        //dd($productRepository->randomProduct());
        return $this->render('product/browse.html.twig', [
            'products' => $productRepository->randomProduct(),
        ]);
    }


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
