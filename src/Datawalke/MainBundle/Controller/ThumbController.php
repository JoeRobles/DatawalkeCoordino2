<?php

namespace Datawalke\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Datawalke\MainBundle\Entity\Thumb;
use Datawalke\MainBundle\Form\ThumbType;

/**
 * Thumb controller.
 *
 * @Route("/thumb")
 */
class ThumbController extends Controller
{

    /**
     * Lists all Thumb entities.
     *
     * @Route("/", name="thumb")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DatawalkeMainBundle:Thumb')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Thumb entity.
     *
     * @Route("/", name="thumb_create")
     * @Method("POST")
     * @Template("DatawalkeMainBundle:Thumb:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Thumb();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('thumb_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Thumb entity.
    *
    * @param Thumb $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Thumb $entity)
    {
        $form = $this->createForm(new ThumbType(), $entity, array(
            'action' => $this->generateUrl('thumb_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Thumb entity.
     *
     * @Route("/new", name="thumb_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Thumb();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Thumb entity.
     *
     * @Route("/{id}", name="thumb_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Thumb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thumb entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Thumb entity.
     *
     * @Route("/{id}/edit", name="thumb_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Thumb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thumb entity.');
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
    * Creates a form to edit a Thumb entity.
    *
    * @param Thumb $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Thumb $entity)
    {
        $form = $this->createForm(new ThumbType(), $entity, array(
            'action' => $this->generateUrl('thumb_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Thumb entity.
     *
     * @Route("/{id}", name="thumb_update")
     * @Method("PUT")
     * @Template("DatawalkeMainBundle:Thumb:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Thumb')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Thumb entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('thumb_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Thumb entity.
     *
     * @Route("/{id}", name="thumb_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DatawalkeMainBundle:Thumb')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Thumb entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('thumb'));
    }

    /**
     * Creates a form to delete a Thumb entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('thumb_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
