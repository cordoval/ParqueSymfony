<?php

namespace Acme\ParqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\ParqueBundle\Entity\Individuos;
use Acme\ParqueBundle\Form\IndividuosType;

/**
 * Individuos controller.
 *
 * @Route("/individuos")
 */
class IndividuosController extends Controller
{
    /**
     * Lists all Individuos entities.
     *
     * @Route("/", name="individuos")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();	
        $entities = $em->getRepository('AcmeParqueBundle:Individuos')->findAll();
        return $this->render('AcmeParqueBundle:Parque:index.html.twig',array('entities' => $entities));
    }

    /**
     * Finds and displays a Individuos entity.
     *
     * @Route("/{id}/show", name="individuos_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeParqueBundle:Individuos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Individuos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeParqueBundle:Parque:index.html.twig',array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Individuos entity.
     *
     * @Route("/new", name="individuos_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Individuos();
        $form   = $this->createForm(new IndividuosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Individuos entity.
     *
     * @Route("/create", name="individuos_create")
     * @Method("post")
     * @Template("AcmeParqueBundle:Individuos:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Individuos();
        $request = $this->getRequest();
        $form    = $this->createForm(new IndividuosType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('individuos_show', array('id' => $entity->getId())));
            
        }

        return $this->render('AcmeParqueBundle:Parque:new.html.twig',array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Individuos entity.
     *
     * @Route("/{id}/edit", name="individuos_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeParqueBundle:Individuos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Individuos entity.');
        }

        $editForm = $this->createForm(new IndividuosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Individuos entity.
     *
     * @Route("/{id}/update", name="individuos_update")
     * @Method("post")
     * @Template("AcmeParqueBundle:Individuos:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeParqueBundle:Individuos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Individuos entity.');
        }

        $editForm   = $this->createForm(new IndividuosType(), $entity);
        

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('individuos_edit', array('id' => $id)));
        }

        return $this->render('AcmeParqueBundle:Parque:edit.html.twig',array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            
        ));
    }

    /**
     * Deletes a Individuos entity.
     *
     * @Route("/{id}/delete", name="individuos_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeParqueBundle:Individuos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Individuos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('individuos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
