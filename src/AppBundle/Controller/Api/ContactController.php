<?php
/**
 * Created by PhpStorm.
 * User: kamilciesielski1
 * Date: 11.09.17
 * Time: 11:28
 */

namespace AppBundle\Controller\Api;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\AB\Contact;
use AppBundle\Form\ContactType;

class ContactController extends Controller
{
    /**
     * @Route("api/contacts", name="api_create")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

        }
        return new Response($contact, 201);
    }
}