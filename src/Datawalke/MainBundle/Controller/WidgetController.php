<?php

namespace Datawalke\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Datawalke\MainBundle\Entity\Widget;
use Datawalke\MainBundle\Form\WidgetType;

/**
 * Widget controller.
 *
 * @Route("/widget")
 */
class WidgetController extends Controller
{

    /**
     * Lists all Widget entities.
     *
     * @Route("/", name="widget")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DatawalkeMainBundle:Widget')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Widget entity.
     *
     * @Route("/", name="widget_create")
     * @Method("POST")
     * @Template("DatawalkeMainBundle:Widget:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Widget();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('widget_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Widget entity.
    *
    * @param Widget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Widget $entity)
    {
        $form = $this->createForm(new WidgetType(), $entity, array(
            'action' => $this->generateUrl('widget_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Widget entity.
     *
     * @Route("/new", name="widget_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Widget();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Widget entity.
     *
     * @Route("/{id}", name="widget_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Widget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Widget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Widget entity.
     *
     * @Route("/{id}/edit", name="widget_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Widget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Widget entity.');
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
    * Creates a form to edit a Widget entity.
    *
    * @param Widget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Widget $entity)
    {
        $form = $this->createForm(new WidgetType(), $entity, array(
            'action' => $this->generateUrl('widget_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Widget entity.
     *
     * @Route("/{id}", name="widget_update")
     * @Method("PUT")
     * @Template("DatawalkeMainBundle:Widget:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Widget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Widget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('widget_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Widget entity.
     *
     * @Route("/{id}", name="widget_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DatawalkeMainBundle:Widget')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Widget entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('widget'));
    }

    /**
     * Creates a form to delete a Widget entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('widget_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
