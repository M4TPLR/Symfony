<?php

namespace UserBundle\Controller;

use AppBundle\Entity\Hall;
use AppBundle\Form\HallType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use UserBundle\Entity\User;
use UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function confirmedAction(Request $request)
    {
        $user = $this->getUser();
        if (null === $user) {
            return $this->redirect($this->generateUrl('fos_user_registration_register'));
        } else{
            $hall = new Hall();
            $form = $this->createForm(UserType::class, $user);
            $hallForm = $this->createForm(HallType::class, $hall);

            if($request->isMethod('POST')){
                $hallForm->handleRequest($request);
                if($hallForm->isValid()){
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($hall);
                    $em->flush();

                    return $this->redirect($this->generateUrl('player', array('id' => 1)));
                }
            }

            return $this->render('UserBundle:Default:confirmed.html.twig', array(
                'form' => $form->createView(),
                'hallForm' => $hallForm->createView()
            ));

        }
    }

    public function validhallAction(){

    }

    /**
     * @Route("/register/confirmed/validate", name="validate")
     * @Method("POST")
     */
    public function validformAction(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Ajax failed, please reload the page'), 400);
        }

        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse(array('message' => 'Success, form is valid', 200));
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
