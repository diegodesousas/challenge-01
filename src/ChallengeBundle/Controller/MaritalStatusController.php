<?php

namespace ChallengeBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations\View;

class MaritalStatusController extends FOSRestController
{
    /**
     * @Route("/maritalstatus")
     * @Method("GET")
     * @View();
     */
    public function findAllAction()
    {
        $maritalStatus =
            $this
                ->getDoctrine()
                ->getRepository('ChallengeBundle:MaritalStatus')
                ->findAll();

        return $maritalStatus;
    }

}
