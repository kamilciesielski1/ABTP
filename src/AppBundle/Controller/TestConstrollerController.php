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

        $tag1 = new Tags();
        $tag1->setName('tag1');
        $task->getTags()->add($tag1);
        $tag2 = new Tags();
        $tag2->setName('tag2');
        $task->getTags()->add($tag2);

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
