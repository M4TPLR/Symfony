<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HallController extends Controller
{
    /**
     * @Route("/hall/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Hall:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/hall/show")
     */
    public function showAction()
    {
        return $this->render('AppBundle:Hall:show.html.twig', array(
            // ...
        ));
    }

}
