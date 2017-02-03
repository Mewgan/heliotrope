<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadPage extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        /* Aster pages */
        'society-heliotrope-price' =>  [
            'title' => 'Tarif',
            'route' => 'module:price.type:static.action:all',
            'website' => 'Heliotrope Website',
            'layout' => 'heliotrope_price_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-heliotrope-single-post' =>  [
            'title' => 'Page d\'un article',
            'route' => 'module:post.type:dynamic.action:read',
            'website' => 'Heliotrope Website',
            'layout' => 'heliotrope_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-heliotrope-list-post' =>  [
            'title' => 'Liste d\'articles',
            'route' => 'module:post.type:dynamic.action:all',
            'website' => 'Heliotrope Website',
            'layout' => 'heliotrope_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-heliotrope-gallery' =>  [
            'title' => 'Galerie',
            'route' => 'module:gallery.type:static.action:all',
            'website' => 'Heliotrope Website',
            'layout' => 'heliotrope_gallery_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-heliotrope-contact' =>  [
            'title' => 'Contact',
            'route' => 'module:contact.type:static.action:show',
            'website' => 'Heliotrope Website',
            'layout' => 'heliotrope_contact_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-heliotrope-home' =>  [
            'title' => 'Accueil',
            'route' => 'home',
            'website' => 'Heliotrope Website',
            'layout' => 'heliotrope_home_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadPage($manager);
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    function getDependencies()
    {
        return [
            'Jet\DataFixtures\LoadRoute',
            'Jet\Modules\Post\Fixtures\LoadPostRoute',
            'Jet\Themes\Heliotrope\Fixtures\LoadWebsite',
            'Jet\Themes\Heliotrope\Fixtures\LoadTemplate',
            'Jet\DataFixtures\LoadLibrary',
        ];
    }
}