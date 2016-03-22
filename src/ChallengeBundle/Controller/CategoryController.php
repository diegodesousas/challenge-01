<?php

namespace ChallengeBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;

class CategoryController extends FOSRestController
{
    /**
     * @Route("/category")
     * @Method("GET")
     * @View();
     */
    public function findAllAction()
    {
        $categorys =
            $this
                ->getDoctrine()
                ->getRepository("ChallengeBundle:Category")
                ->findAll();

        return $categorys;
    }

}
