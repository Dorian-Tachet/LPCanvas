<?php


namespace App\Controller;


use App\Entity\Doctrine\Plane;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class PlaneController extends AbstractController implements DoctrineController {

    public function displayAll() {
        $plane =  $this->getDoctrine()
            ->getRepository(Plane::class)
            ->findAll();
        return $this->json($plane,200);
    }

    public function display($id) {
        $plane = $this->getDoctrine()
            ->getRepository(Plane::class)
            ->find($id);
        if (!$plane) {
            throw $this->createNotFoundException(
                'No plane found for id '.$id
            );
        }
        return $this->json($plane,200);
    }

    public function delete($id) {
        $plane = $this->getDoctrine()
            ->getRepository(Plane::class)
            ->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($plane);
        $entityManager->flush();
        return $this->json([], 204);
    }

    public function update(Request $request, int $id) {
        $manager = $this->getDoctrine()->getManager();
        $plane = $manager->getRepository(Plane::class)->find($id);
        $name = $request->get("name");
        $model = $request->get("model");
        $code = $request->get("code");
        $manufacturer = $request->get("manufacturer");
        
        if ($name != null) {
            $plane->setName($name);
        }
        if ($model != null) {
            $plane->setModel($model);
        }
        if ($code != null) {
            $plane->setCode($code);
        }
        if ($manufacturer != null) {
            $plane->setManufacturer($manufacturer);
        }
        $manager->flush();

        return $this->json($plane,200);
    }

    public function add(Request $request) {
        $manager = $this->getDoctrine()->getManager();
        $name = $request->get("name");
        $model = $request->get("model");
        $code = $request->get("code");
        $manufacturer = $request->get("manufacturer");
        $plane = new Plane();
        $plane->setName($name);
        $plane->setModel($model);
        $plane->setCode($code);
        $plane->setManufacturer($manufacturer);
        $manager->persist($plane);
        $manager->flush();
        return $this->json($plane,201);


    }
}