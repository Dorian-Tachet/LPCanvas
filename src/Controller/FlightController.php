<?php


namespace App\Controller;


use App\Entity\Doctrine\Flight;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class FlightController extends AbstractController implements DoctrineController {

    public function displayAll() {
        $flight = $this->getDoctrine()
            ->getRepository(Flight::class)
            ->findAll();
        return $this->json($flight);
    }

    public function display($id) {
        $flight = $this->getDoctrine()
            ->getRepository(Flight::class)
            ->find($id);
        if (!$flight) {
            throw $this->createNotFoundException(
                'No flight found for id '.$id
            );
        }
        return $this->json($flight);
    }

    public function delete($id) {
        $flight = $this->getDoctrine()
            ->getRepository(Flight::class)
            ->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($flight);
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