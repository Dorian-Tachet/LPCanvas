<?php


namespace App\Controller;


use App\Entity\Doctrine\Airport;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class AirportController extends AbstractController implements  DoctrineController {

    public function displayAll() {
        $airports = $this->getDoctrine()
            ->getRepository(Airport::class)
            ->findAll();
        return $this->json($airports);
    }

    public function display($id) {
        $airport = $this->getDoctrine()
            ->getRepository(Airport::class)
            ->find($id);
        if (!$airport) {
            throw $this->createNotFoundException(
                'No airport found for id '.$id
            );
        }
        return $this->json($airport);
    }

    public function delete($id) {
        $airport = $this->getDoctrine()
            ->getRepository(Airport::class)
            ->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($airport);
        $entityManager->flush();
    }

    public function update(Request $request, int $id)
    {
        // TODO: Implement update() method.
    }

    public function add(Request $request)
    {
        // TODO: Implement add() method.
    }
}