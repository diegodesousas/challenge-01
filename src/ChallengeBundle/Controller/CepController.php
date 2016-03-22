<?php

namespace ChallengeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class CepController extends Controller
{
    /**
     * @Route("/cep/{cep}")
     * @Method("GET")
     */
    public function findAction($cep)
    {
        $client = $this->container->get('circle.restclient');

        $response = $client->get("http://api.postmon.com.br/v1/cep/".$cep);

        if ($response->isNotFound()) {

            return [ 'isNotFound' => true ];
        }

        return $response;
    }

}
