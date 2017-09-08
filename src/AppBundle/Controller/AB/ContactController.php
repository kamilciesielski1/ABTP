<?php

namespace AppBundle\Controller\AB;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Contact:create.html.twig', array(
            // ...
        ));
    }

}
