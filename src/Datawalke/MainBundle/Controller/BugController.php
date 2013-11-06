<?php

namespace Datawalke\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Datawalke\MainBundle\Entity\Bug;
use Datawalke\MainBundle\Form\BugType;

/**
 * Bug controller.
 *
 * @Route("/bug")
 */
class BugController extends Controller
{

    /**
     * Lists all Bug entities.
     *
     * @Route("/", name="bug")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DatawalkeMainBundle:Bug')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Bug entity.
     *
     * @Route("/", name="bug_create")
     * @Method("POST")
     * @Template("DatawalkeMainBundle:Bug:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Bug();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bug_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Bug entity.
    *
    * @param Bug $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Bug $entity)
    {
        $form = $this->createForm(new BugType(), $entity, array(
            'action' => $this->generateUrl('bug_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Bug entity.
     *
     * @Route("/new", name="bug_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Bug();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Bug entity.
     *
     * @Route("/{id}", name="bug_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Bug')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bug entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Bug entity.
     *
     * @Route("/{id}/edit", name="bug_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Bug')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bug entity.');
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
    * Creates a form to edit a Bug entity.
    *
    * @param Bug $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bug $entity)
    {
        $form = $this->createForm(new BugType(), $entity, array(
            'action' => $this->generateUrl('bug_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Bug entity.
     *
     * @Route("/{id}", name="bug_update")
     * @Method("PUT")
     * @Template("DatawalkeMainBundle:Bug:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DatawalkeMainBundle:Bug')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bug entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bug_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Bug entity.
     *
     * @Route("/{id}", name="bug_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DatawalkeMainBundle:Bug')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bug entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bug'));
    }

    /**
     * Creates a form to delete a Bug entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bug_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
