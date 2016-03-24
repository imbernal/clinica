<?php

namespace ApiBundle\Controller;

use AppBundle\Entity\Area;
use AppBundle\Form\AreaType;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Util\Codes;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class AreaController extends FOSRestController
{
    /**
     * Collection get action
     * @var Request $request
     * @return array
     *
     * @Rest\View()
     */
    public function getAreasAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Area')->findAll();

        return $entities;
    }

    /**
     * Get entity instance
     * @var integer $id Id of the entity
     * @return Area
     */
    protected function getEntity($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Area')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find area');
        }

        return $entity;
    }

    /**
     * @Rest\View()
     */
    public function getAreaAction($id)
    {
        $entity = $this->getEntity($id);
        return array('entity' => $entity);
    }

    /**
     * Collection post action
     * @var Request $request
     * @return View|array
     */
    public function postAreaAction(Request $request)
    {
        $entity = new Area();

        $entity->setNombre($request->get('nombre'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->redirectView(
            $this->generateUrl(
                'get_area',
                array('id' => $entity->getId())
            ),
            Codes::HTTP_CREATED
        );
    }

    /**
     * Put action
     * @var Request $request
     * @var integer $id Id of the entity
     * @return View|array
     */
    public function putAreaAction(Request $request, $id)
    {
        $entity = $this->getEntity($id);
        $form = $this->createForm(new AreaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->view(null, Codes::HTTP_NO_CONTENT);
        }

        return array(
            'form' => $form,
        );
    }

    /**
     * Delete action
     * @var integer $id Id of the entity
     * @return View
     */
    public function deleteAreaAction($id)
    {
        $entity = $this->getEntity($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();

        return $this->view(null, Codes::HTTP_NO_CONTENT);
    }
}