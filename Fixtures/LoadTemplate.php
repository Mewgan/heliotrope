<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Jet\Services\LoadFixture;

class LoadTemplate extends AbstractFixture
{
    use LoadFixture;

    protected $data = [
        /* Aster templates */
        'balsamine_layout' => [
            'name' => 'ThemeBalsamineFileLayout',
            'title' => 'Theme Balsamine Template',
            'content' => 'Balsamine/Views/layout',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_simple_home_page_layout' => [
            'name' => 'ThemeBalsamineHomePageFileLayout',
            'title' => 'Theme Balsamine Home Page Template',
            'content' => 'Balsamine/Views/index',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_page_layout' => [
            'name' => 'ThemeBalsaminePageFileLayout',
            'title' => 'Theme Balsamine Page Template',
            'content' => 'Balsamine/Views/page',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_navigation_partial' => [
            'name' => 'ThemeBalsamineNavigationFilePartial',
            'title' => 'Theme Balsamine Navigation Template',
            'content' => 'Balsamine/Views/navigation',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_post_list_partial' => [
            'name' => 'ThemeBalsaminePostListFilePartial',
            'title' => 'Theme Balsamine Post List Template',
            'content' => 'Balsamine/Views/post_list',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_single_post_partial' => [
            'name' => 'ThemeBalsaminePostFilePartial',
            'title' => 'Theme Balsamine Post Template',
            'content' => 'Balsamine/Views/post',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_home_list_service_partial' => [
            'name' => 'ThemeBalsamineHomeServiceListFilePartial',
            'title' => 'Theme Balsamine Home Service List Template',
            'content' => 'Balsamine/Views/home_list_service',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_home_list_news_partial' => [
            'name' => 'ThemeBalsamineHomeNewsListFilePartial',
            'title' => 'Theme Balsamine Home News List Template',
            'content' => 'Balsamine/Views/home_list_news',
            'category' => 'partial',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_team_layout' => [
            'name' => 'ThemeBalsamineTeamFileLayout',
            'title' => 'Theme Balsamine Team Template',
            'content' => 'Balsamine/Views/team_list',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_gallery_layout' => [
            'name' => 'ThemeBalsamineGalleryFileLayout',
            'title' => 'Theme Balsamine Gallery Template',
            'content' => 'Balsamine/Views/gallery',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
        'balsamine_contact_layout' => [
            'name' => 'ThemeBalsamineContactFileLayout',
            'title' => 'Theme Balsamine Contact Template',
            'content' => 'Balsamine/Views/contact',
            'category' => 'layout',
            'scope' => 'specified',
            'type' => 'file'
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadTemplate($manager);
    }
}