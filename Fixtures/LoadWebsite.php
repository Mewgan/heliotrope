<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Services\LoadFixture;

class LoadWebsite extends AbstractFixture implements DependentFixtureInterface
{
    use LoadFixture;

    protected $data = [
        'Heliotrope Website' => [
            'society' => 'Heliotrope Society',
            'domain' => 'heliotrope-society',
            'theme' =>  'Heliotrope',
            'layout' => 'heliotrope_layout',
            'render_system' => 'php',
            'logo' => '/src/Themes/Heliotrope/Resources/public/img/logo-wide-white.png',
            'modules' => [
                'navigation',
                'list-post',
                'single-post',
                'grid-editor',
            ],
            'templates' => [
                'heliotrope_layout',
                'heliotrope_page_layout',
                'heliotrope_home_page_layout',
                'heliotrope_home_list_service_partial',
                'heliotrope_home_list_news_partial',
                'heliotrope_navigation_partial',
                'heliotrope_post_list_partial',
                'heliotrope_single_post_partial',
                'heliotrope_price_layout',
                'heliotrope_gallery_layout',
                'heliotrope_contact_layout',
            ],
            'medias' => [
                '/public/media/thumbnail/theme-heliotrope-thumbnail.png',
                '/src/Themes/Heliotrope/Resources/public/img/logo-wide-white.png',
                '/src/Themes/Heliotrope/Resources/public/img/logo-wide.png',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg4.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg9.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/4.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/5.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/6.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/7.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/services/8.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/blog/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/blog/2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/blog/3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/blog/4.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/blog/5.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/blog/6.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/team/1.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/2.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/3.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/4.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/5.png',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/h2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/4.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/5.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/6.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/7.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/pricing/s1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/pricing/s2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/pricing/s3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/pricing/s4.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/gallery/m1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/gallery/m2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/gallery/m3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/products/1.jpg',
            ],
            'data' => [
                'parent_exclude' => [],
                'parent_replace' => [],
            ]
        ],
        'Sanji Website' => [
            'society' => 'Sanji Society',
            'domain' => 'sanji-society',
            'theme' =>  'Heliotrope',
            'logo' => '/src/Themes/Heliotrope/Resources/public/img/logo-wide-white.png',
            'layout' => 'heliotrope_layout',
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
        $this->loadWebsite($manager, 'Heliotrope Website');
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
            'Jet\Themes\Heliotrope\Fixtures\LoadMedia',
            'Jet\Themes\Heliotrope\Fixtures\LoadTheme',
            'Jet\Themes\Heliotrope\Fixtures\LoadSociety',
            'Jet\Themes\Heliotrope\Fixtures\LoadTemplate',
            'Jet\Modules\Post\Fixtures\LoadPostModule',
            'Jet\Modules\Navigation\Fixtures\LoadNavigationModule',
            'Jet\Modules\GridEditor\Fixtures\LoadGridEditorModule',
        ];
    }
}