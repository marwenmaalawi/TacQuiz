<?php

namespace App\Controller;


use App\Form\ConnectionType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @Route("/connection", name="connection")
     */
    public function connection(Request $request): Response
    { $form = $this->createForm(ConnectionType::class);
        $form->add('Connect', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            return $this->redirectToRoute('test');

        }

        return $this->render('user/connection.html.twig', [
            'form' =>$form->createView(),
        ]);
    }


}
