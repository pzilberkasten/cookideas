<?php
/**
 * Created by PhpStorm.
 * User: paulina
 * Date: 07.04.18
 * Time: 18:40
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/lucky")
     */
    public function index(){

        return $this->render('base.html.twig');
    }
}