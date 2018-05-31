<?php
/**
 * Created by PhpStorm.
 * User: 74315
 * Date: 2018/5/30
 * Time: 9:31
 */
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
    public function navMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        $menu->addChild('home', [
            'route' => 'home',
            'label' => '首页',
        ]);

        $menu->addChild('news', [
            'route' => 'news',
            'label' => '新闻'
        ]);

        return $menu;
    }
}