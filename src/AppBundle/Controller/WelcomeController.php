<?php
/**
 * Created by PhpStorm.
 * User: 74315
 * Date: 2018/5/24
 * Time: 14:48
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="_welcome")
     */
    public function indexAction()
    {
        // ...
        return new Response(
            '<html><body>welcomepage</body></html>'
        );
    }
}