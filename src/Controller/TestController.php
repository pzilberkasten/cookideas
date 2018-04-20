<?php
/**
 * Created by PhpStorm.
 * User: paulina
 * Date: 20.04.18
 * Time: 21:06
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/")
     */
    public function index(){
        return $this->render('base.html.twig');
    }
}
