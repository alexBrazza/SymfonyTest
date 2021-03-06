<?php
namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController{

   
    /**
     * @Route("/", name="home")
     * @param PropertyRepository w
     * @return Response
     */

    public function index(PropertyRepository $repository):Response
    {
        $properties = $repository->findLatest();
        return $this->render('pages/Home.html.twig', [
            'properties' => $properties
        ]);
    }

};