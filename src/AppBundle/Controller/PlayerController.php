<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Video;
use AppBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PlayerController extends Controller
{
    /**
     * @Route("/player/{id}", name="player")
     */
    public function indexAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $r = $em->getRepository('AppBundle:Video');
        $video = $r->find($id);

        $hall = $video->getHall();

        $subscribersHall = $em->getRepository('AppBundle:SubscribersHalls')->findBy(array(
            'halls' => $hall
        ));

        $comment = new Comment();
        $commentForm = $this->createForm(CommentType::class, $comment);
        $commentFormSm = $this->createForm(CommentType::class, $comment);
        if($request->isMethod('POST')){
            $commentFormSm->handleRequest($request);
            if($commentFormSm->isValid()){
                $comment->setUser($this->getUser());
                $comment->setVideo($video);
                $em->persist($comment);
                $em->flush();
            }

            $commentForm->handleRequest($request);
            if($commentForm->isValid()){
                $comment->setUser($this->getUser());
                $comment->setVideo($video);
                $em->persist($comment);
                $em->flush();
            }
        }

        $listComments = $em->getRepository('AppBundle:Comment')->findBy(array('video' => $video));
        $listTags = $em->getRepository('AppBundle:Tag')->findBy(array('video' => $video));
        return $this->render('AppBundle:Player:index.html.twig', array(
            'video' => $video,
            'listComments' => $listComments,
            'listTags' => $listTags,
            'hall' => $hall,
            'nbrSubscribers' => count($subscribersHall),
            'commentForm' => $commentForm->createView(),
            'commentFormSm' => $commentFormSm->createView()
        ));
    }

    /**
     * @Route("/player/comment/{video}", name="comment")
     */
    public
    function validformsmAction($video, Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Ajax failed, please reload the page'), 400);
        }

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $video = $em->getRepository('AppBundle:Video')->find($video);
        if ($form->isValid()) {
            $comment->setUser($this->getUser());
            $comment->setVideo($video);
            $em->persist($comment);
            $em->flush();

            return new JsonResponse(array('message' => 'Success, form is valid', 200));
        }

        return new JsonResponse(array(
            'message' => 'Error',
            'view' => $this->renderView('UserBundle:Default:confirmed.html.twig', array(
                'user' => $comment
            )),
        ), 400);
    }
}
