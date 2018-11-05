<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends Controller
{
    /**
     * @Route("/public/", name="home")
     */
    public function home()
    {
        return $this->render('web/home.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }




    /**
     * @Route("/public/productos", name="productos")
     */
    public function productos()
    {
        return $this->render('web/productos.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


    /**
     * @Route("/public/contactenos", name="contactenos")
     */
    public function contactenos()
    {
        return $this->render('web/contactenos.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }

    /**
     * @Route("/public/nosotros", name="nosotros")
     */
    public function nosotros()
    {
        return $this->render('web/nosotros.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }



}
