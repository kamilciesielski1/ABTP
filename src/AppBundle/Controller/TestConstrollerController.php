<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Test;
use AppBundle\Entity\Tags;
use AppBundle\Form\TestType;
use Symfony\Component\HttpFoundation\Request;

class TestConstrollerController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $request)
    {
        $task = new Test();

        $form = $this->createForm(TestType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
        }

        return $this->render('AppBundle:TestConstroller:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
