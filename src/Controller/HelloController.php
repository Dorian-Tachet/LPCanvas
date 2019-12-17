<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class HelloController {

    function helloAction() {
        return new JsonResponse("hello");
    }

    function numberAction($number) {
        return new JsonResponse($number);
    }

    function putAction($input) {
        return new JsonResponse($input);
    }
}