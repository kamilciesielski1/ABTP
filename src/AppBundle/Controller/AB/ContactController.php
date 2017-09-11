<?php

namespace AppBundle\Controller\AB;

use AppBundle\Entity\AB\Contact;
use AppBundle\Entity\AB\ABTags;
use AppBundle\Form\ContactType;
use AppBundle\Repository\ABTagsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/create")
     */
    public function createAction(Request $request)
    {
        $contact = new Contact();
        $contact->setUser($this->getUser());

        $tagsChoices = $this->getDoctrine()
            ->getRepository('AppBundle:AB\ABTags')
            ->tagsChoices($this->getUser()->getId());
        dump($tagsChoices);die;
        $form = $this->createForm(ContactType::class, $contact, array(
            'tags' => $tagsChoices
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
        }

        return $this->render('AppBundle:Contact:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
