<?php
namespace Jet\Themes\Heliotrope\Fixtures;

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
            'navigation' => 'heliotrope-menu',
            'parent' => null,
            'children' => [],
            'url' => '/',
            'route' => null,
            'type' => 'page',
            'type_id' => 'society-heliotrope-home',
            'position' => 0,
            'website' => 'heliotrope-society',
        ],
        [
            'title' => 'Services',
            'navigation' => 'heliotrope-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/service',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'service',
            'position' => 1,
            'website' => 'heliotrope-society',
        ],
        [
            'title' => 'Tarifs',
            'navigation' => 'heliotrope-menu',
            'parent' => null,
            'children' => [],
            'url' => '/tarif',
            'route' => 'module:price.type:static.action:all',
            'type' => 'page',
            'type_id' => 'society-heliotrope-price',
            'position' => 2,
            'website' => 'heliotrope-society',
        ],
        [
            'title' => 'Galerie',
            'navigation' => 'heliotrope-menu',
            'parent' => null,
            'children' => [],
            'url' => '/galerie',
            'route' => 'module:gallery.type:static.action:all',
            'type' => 'page',
            'type_id' => 'society-heliotrope-gallery',
            'position' => 3,
            'website' => 'heliotrope-society',
        ],
        [
            'title' => 'Actualité',
            'navigation' => 'heliotrope-menu',
            'parent' => null,
            'children' => [],
            'url' => '/articles/actualite',
            'route' => 'module:post.type:dynamic.action:all',
            'type' => 'post_category',
            'type_id' => 'actualite',
            'position' => 4,
            'website' => 'heliotrope-society',
        ],
        [
            'title' => 'Contact',
            'navigation' => 'heliotrope-menu',
            'parent' => null,
            'children' => [],
            'url' => '/contact',
            'route' => 'module:contact.type:static.action:show',
            'type' => 'page',
            'type_id' => 'society-heliotrope-contact',
            'position' => 5,
            'website' => 'heliotrope-society',
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
            'Jet\Themes\Heliotrope\Fixtures\LoadWebsite',
            'Jet\Themes\Heliotrope\Fixtures\LoadNavigation',
            'Jet\DataFixtures\LoadRoute',
            'Jet\Themes\Heliotrope\Fixtures\LoadPage'
        ];
    }
}