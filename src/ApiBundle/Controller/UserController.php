<?php

namespace ApiBundle\Controller;

use ApiBundle\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Util\Codes;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class UserController extends FOSRestController
{
    /**
     * Collection get action
     * @var Request $request
     * @return array
     *
     * @Rest\View()
     */
    public function getUsersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ApiBundle:User')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Get entity instance
     * @var integer $id Id of the entity
     * @return User
     */
    protected function getEntity($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ApiBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User');
        }

        return $entity;
    }

    /**
     * @Rest\View()
     */
    public function getUserAction($id)
    {
        $entity = $this->getEntity($id);
        return array('entity' => $entity);
    }
}