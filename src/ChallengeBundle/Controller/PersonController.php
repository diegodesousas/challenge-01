<?php

namespace ChallengeBundle\Controller;

use ChallengeBundle\Entity\Address;
use ChallengeBundle\Entity\Details;
use ChallengeBundle\Entity\Person;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\View;

/**
 * Description of PersonController
 *
 * @author diego
 */
class PersonController extends FOSRestController
{
    /**
     * @Route("/persons", name="persons")
     * @View()
     * @Method("GET")
     */
    public function getAllAction()
    {
        $persons = $this->getDoctrine()->getRepository('ChallengeBundle:Person')->findAll();

        return $persons;
    }

    /**
     * @Route("/persons/{cpf}", name="get_persons")
     * @View()
     * @Method("GET")
     */
    public function getPersonAction($cpf)
    {
        $person = $this->getDoctrine()->getRepository('ChallengeBundle:Person')->findOneByCpf($cpf);

        return $person;
    }

    /**
     * @Route("/persons", name="post_persons")
     * @View()
     * @Method("POST")
     */
    public function saveAction(Request $request)
    {
        $person = $this->paramConverterPerson($request);

        $formPerson = $this->createForm('ChallengeBundle\Form\PersonType', $person);
        $formPerson->handleRequest($request);

        $address = $this->paramConverterAddress($request);

        $formAddress = $this->createForm('ChallengeBundle\Form\AddressType', $address);
        $formAddress->handleRequest($request);

        $person->addAddress($address);

        $details = $this->paramConverterDetails($request);

        $person->setDetails($details);

        $formDetails = $this->createForm('ChallengeBundle\Form\DetailsType', $details);
        $formDetails->handleRequest($request);

        if ($formPerson->isValid()
                && $formAddress->isValid()
                && $formDetails->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();

            return $person;
        }

        return array(
            'formPerson' => $formPerson,
            'formAddress' => $formAddress,
            'formDetails' => $formDetails,
        );
    }

    /**
     * @Route("/persons/{id}", name="delte_persons")
     * @View()
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $person = $this->getDoctrine()->getRepository('ChallengeBundle:Person')->findOneByCpf($id);

        if (empty($person)) {

            return ['message' => 'O cliente ' . $id . ' não está disponível.'];
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($person);

        foreach ($person->getAddress() as $address) {

            $em->remove($address);
        }

        $em->remove($person->getDetails());

        $em->flush();

        return ['message' => 'O cliente ' . $id . ' foi excluido.'];
    }

    /**
     * Converte os dados da request para um objeto Person
     *
     * @param Request $request
     * @return Person
     */
    protected function paramConverterPerson(Request $request)
    {
        $data = $request->get('person', []);

        $personId = empty($data['id']) ? 0 : $data['id'];

        $person = $this->getDoctrine()
            ->getRepository('ChallengeBundle:Person')
            ->find($personId);

        if (!$person) {

            $person = new Person();
        }

        return $person;
    }

    /**
     * Converte os dados da request para um objeto Address
     *
     * @param Request $request
     * @return Address
     */
    protected function paramConverterAddress(Request $request)
    {
        $data = $request->get('address', []);

        $addressId = empty($data['id']) ? 0 : $data['id'];

        $address = $this->getDoctrine()
            ->getRepository('ChallengeBundle:Address')
            ->find($addressId);

        if (!$address) {

            $address = new Address();
        }

        return $address;
    }

    /**
     * Converte os dados da request para um objeto Address
     *
     * @param Request $request
     * @return Address
     */
    protected function paramConverterDetails(Request $request)
    {
        $data = $request->get('details', []);

        $detailsId = empty($data['id']) ? 0 : $data['id'];

        $details = $this->getDoctrine()
            ->getRepository('ChallengeBundle:Details')
            ->find($detailsId);

        if (!$details) {

            $details = new Details();
        }

        return $details;
    }
}