<?php
/**
 * Created by PhpStorm.
 * User: 74315
 * Date: 2018/5/23
 * Time: 10:34
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{

    /**
     * Matches /blog exactly / 精确匹配了/blog
     *
     * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"}))
     */
    public function listAction($page = 1)
    {
        /*
        return new Response(
            '<html><body>controllerName: listAction.页码:'.$page.'</body></html>'
        );
        */
        //$send = array();
        //$send[0] = array( 'title' => 'TitleA', 'body' => '123');
        //$send[1] = array( 'title' => 'TitleB', 'body' => '3');
        $blog_entries = array(
            array( 'title' => 'TitleA', 'body' => '123'),
            array( 'title' => 'TitleB', 'body' => '3')
        );
        return $this->render('blog/blog.html.twig', array('blog_entries' => $blog_entries));
    }

    /**
     * Matches /blog/* / 匹配的是/blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */

    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'
        // $slug 必须等同于URL中的动态部分
        // 即，在 /blog/yay-routing 中 $slug='yay-routing'

        // ...
        return new Response(
            '<html><body>controllerName: '.$slug.'</body></html>'
        );
    }

    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function articleshowAction($_locale, $year, $slug)
    {
        return new Response(
            '<html><body>controllerName: '.$_locale.$year.$slug.'</body></html>'
        );
    }

}