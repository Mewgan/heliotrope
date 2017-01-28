<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadPage extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        /* Aster pages */
        'society-balsamine-contact' =>  [
            'title' => 'Contact',
            'route' => 'module:contact.type:static.action:show',
            'website' => 'Balsamine Website',
            'layout' => 'balsamine_contact_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-balsamine-gallery' =>  [
            'title' => 'Galerie',
            'route' => 'module:gallery.type:static.action:all',
            'website' => 'Balsamine Website',
            'layout' => 'balsamine_gallery_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-balsamine-team' =>  [
            'title' => 'Equipe',
            'route' => 'module:team.type:static.action:all',
            'website' => 'Balsamine Website',
            'layout' => 'balsamine_team_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'static',
        ],
        'society-balsamine-single-post' =>  [
            'title' => 'Article',
            'route' => 'module:post.type:dynamic.action:read',
            'website' => 'Balsamine Website',
            'layout' => 'balsamine_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-balsamine-list-post' =>  [
            'title' => 'Liste d\'articles',
            'route' => 'module:post.type:dynamic.action:all',
            'website' => 'Balsamine Website',
            'layout' => 'balsamine_page_layout',
            'stylesheets' => [],
            'libraries' => [],
            'type' => 'dynamic'
        ],
        'society-balsamine-home' =>  [
            'title' => 'Accueil',
            'route' => 'home',
            'website' => 'Balsamine Website',
            'layout' => 'balsamine_simple_home_page_layout',
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
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadTemplate',
            'Jet\DataFixtures\LoadLibrary',
        ];
    }
}