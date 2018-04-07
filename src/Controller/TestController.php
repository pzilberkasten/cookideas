<?php
/**
 * Created by PhpStorm.
 * User: paulina
 * Date: 07.04.18
 * Time: 18:40
 */

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;

class TestController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function index(){

        return new Response('<html><body>nic takiego</body></html>');
    }
}