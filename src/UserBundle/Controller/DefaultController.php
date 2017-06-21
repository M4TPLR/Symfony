<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function confirmedAction()
    {
        $user = $this->getUser();
        if(null===$user){
            return $this->redirect($this->generateUrl('fos_user_registration_register'));
        }elseif ($user->getFirstname() === '' && $user->getLastname() === '' && $user->getBio() === ''){
            $form = $this->createForm(UserType::class, $user);
            return $this->render('UserBundle:Default:confirmed.html.twig', array(
                'form' => $form->createView()
            ));
        }else{
            return $this->redirect($this->generateUrl('player', array('id' => 1)));
        }
    }

    /**
     * @Route("/register/confirmed/validate", name="validate")
     * @Method("POST")
     */
    public function validformAction(Request $request){
        if(!$request->isXmlHttpRequest()){
            return new JsonResponse(array('message' => 'Ajax failed, please reload the page'), 400);
        }

        $user = $this->getUser();
        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse(array('message'=>'Success, form is valid', 200));
        }

        return new JsonResponse(array(
            'message' => 'Error',
            'view' => $this->renderView('UserBundle:Default:confirmed.html.twig', array(
                'form' => $form->createView(),
                'user' => $user
            )),
        ), 400);
    }
}
