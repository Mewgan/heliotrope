<?php
namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;

/**
 * Class LoadNavigationItem
 * @package Jet\Modules\Navigation\Fixtures
 */
class LoadNavigationItem extends AbstractFixture implements DependentFixtureInterface
{

    use LoadPostFixture;
    use LoadNavigationFixture;
    /**
     * @var array
     */
    protected $data = [
        [
            'title' => 'Accueil',
            'navigation' => 'balsamine-menu',
            'parent' => null,
            'children' => [],
            'url' => '/',
            'route' => null,
            'type' => 'page',
            'type_id' => 'society-balsamine-home',
            'position' => 0,
            'website' => 'balsamine-society',
        ],
        [
            'title' => 'Services',
            'navigation' => 'balsamine-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/service',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'service',
            'position' => 1,
            'website' => 'balsamine-society',
        ],
        [
            'title' => 'Équipe',
            'navigation' => 'balsamine-menu',
            'parent' => null,
            'children' => [],
            'url' => '/equipe',
            'route' => 'module:team.type:static.action:all',
            'type' => 'page',
            'type_id' => 'society-balsamine-team',
            'position' => 2,
            'website' => 'balsamine-society',
        ],
        [
            'title' => 'Galerie',
            'navigation' => 'balsamine-menu',
            'parent' => null,
            'children' => [],
            'url' => '/galerie',
            'route' => 'module:gallery.type:static.action:all',
            'type' => 'page',
            'type_id' => 'society-balsamine-gallery',
            'position' => 3,
            'website' => 'balsamine-society',
        ],
        [
            'title' => 'Actualité',
            'navigation' => 'balsamine-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/actualite',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'actualite',
            'position' => 4,
            'website' => 'balsamine-society',
        ],
        [
            'title' => 'Contact',
            'navigation' => 'balsamine-menu',
            'parent' => null,
            'children' => [],
            'url' => '/contact',
            'route' => 'module:contact.type:static.action:show',
            'type' => 'page',
            'type_id' => 'society-balsamine-contact',
            'position' => 5,
            'website' => 'balsamine-society',
        ]
    ];

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->addNavigationTypeCallback('post','getPostTypeId');
        $this->addNavigationTypeCallback('post_category','getPostCategoryTypeId');
        $this->loadNavigationItem($manager);
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
            'Jet\Modules\Post\Fixtures\LoadPostRoute',
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadNavigation',
            'Jet\DataFixtures\LoadRoute',
            'Jet\Themes\Balsamine\Fixtures\LoadPage'
        ];
    }
}