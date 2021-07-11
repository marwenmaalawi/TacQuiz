<?php

namespace App\Controller;

use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question", name="question")
     */
    public function index(): Response
    {
        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }

    /**
     * @param $id
     * @param Request $request
     * @param SessionInterface $session
     * @return Response
     * @Route("/DisplayQues/{id}", name="DisplayQues")
     */
    public function DisplayQuestions($id,Request $request,SessionInterface $session): Response
    {   if(is_null($session->get('user'))){
        return $this->redirectToRoute('connection');
    }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());
        $Question= $this->getDoctrine()->getRepository(Question::class)->findBy(['quiz'=>$id]);
        $Quiz=$this->getDoctrine()->getRepository(Quiz::class)->find($id);


        return $this->render('question/displayQuestions.html.twig', ['quiz'=>$Quiz,'question'=>$Question, 'user'=>$user,]);

    }

    /**
     * @param $id
     * @param SessionInterface $session
     * @param $idquiz
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/DeleteQuestion/{id}/{idquiz}" , name="DeleteQuestion")
     */
    public function DeleteQuestion($id, SessionInterface $session,$idquiz)
    {
        $user=$session->get('user');
        if(is_null($user)){
            return $this->redirectToRoute('connection');

        }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());

        $QuestionFind = $this->getDoctrine()->getRepository(Question::class)->find($id);


        $em = $this->getDoctrine()->getManager();
        $em->remove($QuestionFind);
        $em->flush();
        return $this->redirectToRoute('DisplayQues',['user'=>$user, 'id'=>$idquiz,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/UpdateQuestion/{id}" , name="UpdateQuestion")
     */
    /*public function UpdateQuiz($id, Request $request, SessionInterface $session)
    {$user=$session->get('user');
        if(is_null($user)){
            return $this->redirectToRoute('connection');

        }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());

        $catFind = $this->getDoctrine()->getRepository(Quiz::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(QuizType::class, $catFind);
        $form->add('Update', SubmitType::class);
        $R=$catFind->getRandom();

        $form->handleRequest($request);
        if ($form->isSubmitted() ) {
            $Cat=$catFind->getCategory()->getId();
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('DisplayQuizCat',['id'=>$Cat, 'user'=>$user,]);
        }
        return $this->render('Quiz/editQuiz.html.twig', ['form' => $form->createView(),'R'=>$R, 'user'=>$user,]);

    }*/

}
