<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Navigation\Services\LoadNavigationFixture;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadContent extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;
    use LoadNavigationFixture;

    protected $data = [
        /* Heliotrope website navigation module content */
        'heliotrope_navigation_content' => [
            'cat_mod' => 'navigation',
            'name' => 'Menu',
            'block' => 'navigation',
            'website' => 'heliotrope-society',
            'module' => 'module_simple_menu',
            'template' => 'heliotrope_navigation_partial',
            'section' => null,
            'page' => null,
            'data' => [
                'class' => '',
                'navigation' => 'heliotrope-menu'
            ]
        ],
        /* heliotrope website post module content */
        'heliotrope_list_home_service_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste de services',
            'block' => 'list_home_service',
            'website' => 'heliotrope-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_home_list_service_partial',
            'section' => null,
            'page' => 'society-heliotrope-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 2,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['service'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'heliotrope_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'list_home_news',
            'website' => 'heliotrope-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_home_list_news_partial',
            'section' => null,
            'page' => 'society-heliotrope-home',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        /* Slider homepage */
        'heliotrope_slider_list_home_service_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste de services',
            'block' => 'list_home_service',
            'website' => 'heliotrope-slider-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_home_list_service_partial',
            'section' => null,
            'page' => 'society-heliotrope-home-slider',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 4,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['service'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'heliotrope_slider_list_home_news_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'actualités',
            'block' => 'list_home_news',
            'website' => 'heliotrope-slider-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_home_slider_list_news_partial',
            'section' => null,
            'page' => 'society-heliotrope-home-slider',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 6,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'heliotrope_list_service_content' => [
            'cat_mod' => 'post',
            'name' => 'Services',
            'block' => 'list_post',
            'website' => 'heliotrope-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_post_list_partial',
            'section' => null,
            'page' => 'society-heliotrope-service',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 100,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['service'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'heliotrope_list_actualite_content' => [
            'cat_mod' => 'post',
            'name' => 'Actualités',
            'block' => 'list_post',
            'website' => 'heliotrope-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_post_list_partial',
            'section' => null,
            'page' => 'society-heliotrope-actualite',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 100,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'static',
                        'column' => '',
                        'route' => '',
                        'value' => ['actualite'],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'heliotrope_list_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Liste d\'articles',
            'block' => 'list_post',
            'website' => 'heliotrope-society',
            'module' => 'module_post_list',
            'template' => 'heliotrope_post_list_partial',
            'section' => null,
            'page' => 'society-heliotrope-list-post',
            'data' => [
                'class' => '',
                'route_name' => 'module:post.type:dynamic.action:read',
                'total_row' => 100,
                'db' => [
                    [
                        'alias' => 'c',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ],
                'link' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'route' => 'slug',
                        'column' => 'slug',
                        'value' => '',
                        'value_id' => ''
                    ]
                ],
            ]
        ],
        'heliotrope_single_post_content' => [
            'cat_mod' => 'post',
            'name' => 'Article',
            'block' => 'single_post',
            'website' => 'heliotrope-society',
            'module' => 'module_single_post',
            'template' => 'heliotrope_single_post_partial',
            'section' => null,
            'page' => 'society-heliotrope-single-post',
            'data' => [
                'class' => '',
                'db' => [
                    [
                        'alias' => 'p',
                        'type' => 'dynamic',
                        'column' => 'slug',
                        'route' => 'slug',
                        'value' => [],
                    ]
                ]
            ]
        ],
        /* Team */
        'heliotrope_home_team_content' => [
            'cat_mod' => 'team',
            'name' => 'Équipe',
            'block' => 'team',
            'website' => 'heliotrope-society',
            'module' => 'module_team',
            'template' => 'heliotrope_team_partial',
            'section' => null,
            'page' => 'society-heliotrope-home',
            'data' => [
                'class' => '',
                'roles' => []
            ]
        ],
        'heliotrope_home_slider_team_content' => [
            'cat_mod' => 'team',
            'name' => 'Équipe',
            'block' => 'team',
            'website' => 'heliotrope-society',
            'module' => 'module_team',
            'template' => 'heliotrope_team_partial',
            'section' => null,
            'page' => 'society-heliotrope-home-slider',
            'data' => [
                'class' => '',
                'roles' => []
            ]
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->addContentCallback('post', 'getPostContent');
        $this->addContentCallback('navigation', 'getNavigationContent');
        $this->loadContent($manager);
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
            'Jet\DataFixtures\LoadSection',
            'Jet\Themes\Heliotrope\Fixtures\LoadWebsite',
            'Jet\Themes\Heliotrope\Fixtures\LoadPage',
            'Jet\Themes\Heliotrope\Fixtures\LoadPost',
            'Jet\Themes\Heliotrope\Fixtures\LoadNavigation',
            'Jet\Themes\Heliotrope\Fixtures\LoadTemplate',
            'Jet\Modules\Post\Fixtures\LoadPostModule',
            'Jet\Modules\Navigation\Fixtures\LoadNavigationModule',
            'Jet\Modules\Team\Fixtures\LoadTeamModule',
        ];
    }
}