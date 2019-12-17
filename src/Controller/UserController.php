<?php


namespace App\Controller;


use App\Entity\User;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController{

    public function createUser($lastName, $firstName) {
        $data = new User(1,$firstName,$lastName, new DateTime(), new DateTime());
        return $this->json($data);
    }

    public function getUserList() {
        $userList = array();
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Cedric","Bagot", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Kylliannnnnnnn","Mbappe", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"YVAN","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        array_push($userList, new User(1,"Bob","Dylan", new DateTime(), new DateTime()));
        return $this->json($userList);
    }
}