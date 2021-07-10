<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\User;
use App\Entity\Quiz;
use App\Form\CategoryType;
use App\Form\QuizType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class QuizController extends AbstractController
{
    /**
     * @Route("/quiz", name="quiz")
     */
    public function index(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user)){
            return $this->redirectToRoute('connection');

        }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());

        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
            'user'=>$user,
        ]);
    }

    /**
     * @Route("/DisplayQuiz", name="DisplayQuiz")
     */
    public function DisplayQuiz( SessionInterface $session)
    {
        $user=$session->get('user');
        if(is_null($user)){
            return $this->redirectToRoute('connection');

        }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());

        $Quiz = $this->getDoctrine()->getRepository(Quiz::class)->findAll();
        return $this->render('quiz/displayAllQuiz.html.twig', ['Quiz' => $Quiz, 'user'=>$user,]);
    }

    /**
     * @param $id
     * @param Request $request
     * @param SessionInterface $session
     * @return Response
     * @Route ("/DisplayQuizCat/{id}",name="DisplayQuizCat")
     */

    public function DisplayQuizCat($id,Request $request,SessionInterface $session): Response
    {   if(is_null($session->get('user'))){
        return $this->redirectToRoute('connection');
    }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());
        $cat= $this->getDoctrine()->getRepository(Category::class)->find($id);
        $Quizfind = $this->getDoctrine()->getRepository(Quiz::class)->findBy(array('Category'=>$cat));


        return $this->render('quiz/displayQuizCat.html.twig', ['Quiz' => $Quizfind, 'user'=>$user,]);

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/Addquiz", name="Addquiz")
     */
    public function Addquiz(Request $request,SessionInterface $session)
    {
        $user = $session->get('user');
        if (is_null($user)) {
            return $this->redirectToRoute('connection');

        }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());

        $users = $this->getDoctrine()->getRepository(User::class)->find($user->getId());

        $Quiz = new Quiz();

        $Quiz->setUser($users);

        $form = $this->createForm(QuizType::class, $Quiz);

        $form->add('Submit', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $cat=$this->getDoctrine()->getRepository(Category::class)->find($form['Category']->getData()->getId());

            $quiz= $this->getDoctrine()->getRepository(Quiz::class)->findOneBy(array('Title'=>$form['Title']->getData(),'Category'=>$cat));

            if ($quiz != null){

                  return $this->render('quiz/addQuizError.html.twig', ['form' => $form->createView(),'message'=>'Title already exists', 'user'=>$user,]);
                  }
            else{
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['image']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );}
            $Cat=$Quiz->getCategory()->getId();
                $Quiz->setImage($newFilename);
                $em = $this->getDoctrine()->getManager();

                $em->persist($Quiz);
                $em->flush();
                return $this->redirectToRoute('DisplayQuizCat',['id'=>$Cat, 'user'=>$user,]);}

            }
            return $this->render('quiz/addQuiz.html.twig', ['form' => $form->createView(), 'user'=>$user,]);



    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/DeleteQuiz/{id}" , name="DeleteQuiz")
     */
    public function DeleteQuiz($id, SessionInterface $session)
    {
        $user=$session->get('user');
        if(is_null($user)){
            return $this->redirectToRoute('connection');

        }
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('user')->getId());

        $QuizFind = $this->getDoctrine()->getRepository(Quiz::class)->find($id);
        $idCat =$QuizFind->getCategory()->getId();
        $em = $this->getDoctrine()->getManager();
        $em->remove($QuizFind);
        $em->flush();
        return $this->redirectToRoute('DisplayQuizCat',['id'=>$idCat, 'user'=>$user,]);

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/UpdateQuiz/{id}" , name="UpdateQuiz")
     */
    public function UpdateQuiz($id, Request $request, SessionInterface $session)
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

    }


}