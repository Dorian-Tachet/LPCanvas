<?php


namespace App\Controller;


use App\Entity\Doctrine\Pilot;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PilotController extends AbstractController implements DoctrineController{

    public function displayAll() {
        $pilot = $this->getDoctrine()
            ->getRepository(Pilot::class)
            ->findAll();
        return $this->json($pilot);
    }

    public function display(int $id) {
        $pilot = $this->getDoctrine()
            ->getRepository(Pilot::class)
            ->find($id);
        if (!$pilot) {
            throw $this->createNotFoundException(
                'No pilot found for id '.$id
            );
        }
        return $this->json($pilot);
    }

    public function delete(int $id) {
        $pilot = $this->getDoctrine()
            ->getRepository(Pilot::class)
            ->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($pilot);
        $entityManager->flush();
    }

    public function update(Request $request, int $id) {
        $manager = $this->getDoctrine()->getManager();
        $pilot = $manager->getRepository(Pilot::class)->find($id);
        $pilot->setFirstName($request->attributes->getAlnum("firstName"));
        $pilot->setLastName($request->attributes->getAlnum("lastName"));
        $pilot->setBirthDate($request->attributes->getAlnum(""));

        $manager->flush();
    }

    public function add(Request $request) {

    }

}