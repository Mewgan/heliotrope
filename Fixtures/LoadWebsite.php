<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsite extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Balsamine Website' => [
            'society' => 'Balsamine Society',
            'domain' => 'balsamine-society',
            'theme' =>  'Balsamine',
            'layout' => 'balsamine_layout',
            'render_system' => 'php',
            'logo' => '/src/Themes/Balsamine/Resources/public/img/logo.png',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [
                'balsamine_layout',
                'balsamine_page_layout',
                'balsamine_simple_home_page_layout',
                'balsamine_home_list_service_partial',
                'balsamine_home_list_news_partial',
                'balsamine_navigation_partial',
                'balsamine_post_list_partial',
                'balsamine_single_post_partial',
                'balsamine_team_layout',
                'balsamine_gallery_layout',
                'balsamine_contact_layout',
            ],
            'medias' => [
                '/public/media/thumbnail/theme-balsamine-thumbnail.png',
                '/src/Themes/Balsamine/Resources/public/img/logo.png',
                '/src/Themes/Balsamine/Resources/public/img/logo_light.png',
                '/src/Themes/Balsamine/Resources/public/img/video-poster.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/subheader-1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/subheader-2.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/subheader-3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/subheader-4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/subheader-5.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/subheader-6.jpg',
                '/src/Themes/Balsamine/Resources/public/img/images-slider/wide7.jpg',
                '/src/Themes/Balsamine/Resources/public/img/images-slider/wide8.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-5.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-7.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-8.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-9.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-11.jpg',
                '/src/Themes/Balsamine/Resources/public/img/background/bg-side-9.jpg',
                '/src/Themes/Balsamine/Resources/public/img/services/service-big-1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/services/service-big-2.jpg',
                '/src/Themes/Balsamine/Resources/public/img/services/service-big-3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/services/service-big-4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/services/service-big-5.jpg',
                '/src/Themes/Balsamine/Resources/public/img/services/service-big-6.jpg',
                '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-2.jpg',
                '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/blog/pic-blog-4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/team/team_pic_1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/team/team_pic_2.jpg',
                '/src/Themes/Balsamine/Resources/public/img/team/team_pic_3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/team/team_pic_4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_1.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_2.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_3.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_4.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_5.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_6.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_7.jpg',
                '/src/Themes/Balsamine/Resources/public/img/gallery/gal_8.jpg',
            ],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ],
        'Zoro Website' => [
            'society' => 'Zoro Society',
            'domain' => 'zoro-society',
            'theme' =>  'Balsamine',
            'logo' => '/src/Themes/Balsamine/Resources/public/img/logo.png',
            'layout' => 'balsamine_layout',
            'render_system' => 'php',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [],
            'medias' => [],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadWebsite($manager, 'Balsamine Website');
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
            'Jet\Themes\Balsamine\Fixtures\LoadMedia',
            'Jet\Themes\Balsamine\Fixtures\LoadTheme',
            'Jet\Themes\Balsamine\Fixtures\LoadSociety',
            'Jet\Themes\Balsamine\Fixtures\LoadTemplate',
            'Jet\Modules\Post\Fixtures\LoadPostModule',
            'Jet\Modules\Navigation\Fixtures\LoadNavigationModule',
            'Jet\Modules\GridEditor\Fixtures\LoadGridEditorModule',
        ];
    }
}