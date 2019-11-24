<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola Mundo con Symfony 5'
        ]);
    }

    public function animales($nombre, $apellidos){
        $title = 'Bienvenido a la pagina de animales';
        return $this->render('home/animales.html.twig', [
            'title' => $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos
        ]);
    }

    public function redirigir(){
        //Redirige a un ruta especifica dentro del sitio, se le pueden pasar parametros y el status http
        // return $this->redirectToRoute('animales', [
        //     'nombre' => 'Juan Pedro',
        //     'apellidos' => 'Lopez'
        // ]);

        return $this->redirect('https://google.com.co');
    }
}
