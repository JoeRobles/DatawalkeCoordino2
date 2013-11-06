<?php

namespace Datawalke\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Datawalke\MainBundle\Entity\PostRev;
use Datawalke\MainBundle\Form\PostRevType;

/**
 * PostRev controller.
 *
 * @Route("/postrev")
 */
class PostRevController extends Controller
{

    /**
     * Lists all PostRev entities.
     *
     * @Route("/", name="postrev")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DatawalkeMainBundle:PostRev')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new PostRev entity.
     *
     * @Route("/", name="postrev_create")
     * @Method("POST")
     * @Template("DatawalkeMainBundle:PostRev:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new PostRev();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('postrev_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a PostRev entity.
    *
    * @param PostRev $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PostRev $entity)
    {
        $form = $this->createForm(new PostRevType(), $entity, array(
            'action' => $this->generateUrl('postrev_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PostRev entity.
     *
     * @Route("/new", name="postrev_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new PostRev();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a PostRev entity.
     *
     * @Route("/{id}", name="postrev_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:PostRev')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PostRev entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing PostRev entity.
     *
     * @Route("/{id}/edit", name="postrev_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:PostRev')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PostRev entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a PostRev entity.
    *
    * @param PostRev $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PostRev $entity)
    {
        $form = $this->createForm(new PostRevType(), $entity, array(
            'action' => $this->generateUrl('postrev_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PostRev entity.
     *
     * @Route("/{id}", name="postrev_update")
     * @Method("PUT")
     * @Template("DatawalkeMainBundle:PostRev:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:PostRev')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PostRev entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('postrev_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a PostRev entity.
     *
     * @Route("/{id}", name="postrev_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DatawalkeMainBundle:PostRev')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PostRev entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('postrev'));
    }

    /**
     * Creates a form to delete a PostRev entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('postrev_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
