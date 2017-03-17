<?php

namespace Jet\Themes\Heliotrope\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTemplate extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        /* Heliotrope templates */
        'heliotrope_layout' => [
            'name' => 'ThemeHeliotropeFileLayout',
            'title' => 'Theme Heliotrope Template',
            'content' => 'Heliotrope/Views/layout',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_home_page_layout' => [
            'name' => 'ThemeHeliotropeHomePageFileLayout',
            'title' => 'Theme Heliotrope Home Page Template',
            'content' => 'Heliotrope/Views/index',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_home_page_slider_layout' => [
            'name' => 'ThemeHeliotropeHomePageSliderFileLayout',
            'title' => 'Theme Heliotrope Home Page Slider Template',
            'content' => 'Heliotrope/Views/index_slider',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_page_layout' => [
            'name' => 'ThemeHeliotropePageFileLayout',
            'title' => 'Theme Heliotrope Page Template',
            'content' => 'Heliotrope/Views/page',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_navigation_partial' => [
            'name' => 'ThemeHeliotropeNavigationFilePartial',
            'title' => 'Theme Heliotrope Navigation Template',
            'content' => 'Heliotrope/Views/navigation',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_post_list_partial' => [
            'name' => 'ThemeHeliotropePostListFilePartial',
            'title' => 'Theme Heliotrope Post List Template',
            'content' => 'Heliotrope/Views/post_list',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_single_post_partial' => [
            'name' => 'ThemeHeliotropePostFilePartial',
            'title' => 'Theme Heliotrope Post Template',
            'content' => 'Heliotrope/Views/post',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_home_list_service_partial' => [
            'name' => 'ThemeHeliotropeHomeServiceListFilePartial',
            'title' => 'Theme Heliotrope Home Service List Template',
            'content' => 'Heliotrope/Views/home_list_service',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_home_list_news_partial' => [
            'name' => 'ThemeHeliotropeHomeNewsListFilePartial',
            'title' => 'Theme Heliotrope Home News List Template',
            'content' => 'Heliotrope/Views/home_list_news',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_home_slider_list_news_partial' => [
            'name' => 'ThemeHeliotropeHomeSliderNewsListFilePartial',
            'title' => 'Theme Heliotrope Home Slider News List Template',
            'content' => 'Heliotrope/Views/home_slider_list_news',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_home_list_partners_partial' => [
            'name' => 'ThemeHeliotropeHomePartnersListFilePartial',
            'title' => 'Theme Heliotrope Home Partners List Template',
            'content' => 'Heliotrope/Views/partner_list_news',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_price_layout' => [
            'name' => 'ThemeHeliotropePriceFileLayout',
            'title' => 'Theme Heliotrope Price Template',
            'content' => 'Heliotrope/Views/price_list',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_gallery_layout' => [
            'name' => 'ThemeHeliotropeGalleryFileLayout',
            'title' => 'Theme Heliotrope Gallery Template',
            'content' => 'Heliotrope/Views/gallery',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_contact_layout' => [
            'name' => 'ThemeHeliotropeContactFileLayout',
            'title' => 'Theme Heliotrope Contact Template',
            'content' => 'Heliotrope/Views/contact',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'heliotrope_team_partial' => [
            'name' => 'ThemeHeliotropeTeamFilePartial',
            'title' => 'Theme Heliotrope Team Template',
            'content' => 'Heliotrope/Views/team',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager);
    }
}