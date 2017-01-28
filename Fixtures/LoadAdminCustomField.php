<?php

namespace Jet\Themes\Balsamine\Fixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Jet\Modules\Post\Services\LoadPostFixture;
use Jet\Services\LoadFixture;

class LoadAdminCustomField extends AbstractFixture implements DependentFixtureInterface
{

    use LoadFixture;
    use LoadPostFixture;

    protected $data = [
        /* Balsamine fields */
        'balsamine_opening_hours' => [
            'scope' => 'global',
            'title' => 'Horaires d\'ouverture',
            'name' => 'opening_hours',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => ['value' => 'Monday - Friday: 09:00 - 22:00']
        ],
        'balsamine_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1]
            ]
        ],
        'balsamine_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_social',
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => [
                'value' => [
                    'Facebook',
                    'Twitter',
                ]
            ]
        ],
        'balsamine_social_link' => [
            'scope' => 'global',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_social',
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => [
                'value' => [
                    '#',
                    '#',
                ]
            ]
        ],
        'balsamine_booking' => [
            'scope' => 'global',
            'title' => 'Lien du rendez-vous en ligne',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Default Global',
            'data' => [],
            'content' => ['value' => '#']
        ],
        /* Theme specific */
        'balsamine_sub_logo' => [
            'scope' => 'global',
            'title' => 'Logo réduit',
            'name' => 'logo_light',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Balsamine/Resources/public/img/logo_light.png']
        ],
        'balsamine_theme_color' => [
            'scope' => 'global',
            'title' => 'Couleur du thème',
            'name' => 'theme_color',
            'type' => 'select',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'green','value' => 'Vert'],
                    ['key' => 'orange','value' => 'Orange'],
                    ['key' => 'red','value' => 'Rouge'],
                    ['key' => 'blue','value' => 'Bleu'],
                    ['key' => 'pink','value' => 'Rose'],
                    ['key' => 'yellow','value' => 'Jaune'],
                    ['key' => 'purple','value' => 'Violet'],
                    ['key' => 'brown','value' => 'Marron'],
                    ['key' => 'aqua','value' => 'Aqua'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'pink']
        ],
        'balsamine_header_style' => [
            'scope' => 'global',
            'title' => 'Position du menu',
            'name' => 'navigation_position',
            'type' => 'select',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'center','value' => 'Milieu'],
                    ['key' => 'left','value' => 'Gauche'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'center']
        ],
        /* Page */
        'balsamine_page' => [
            'scope' => 'specified',
            'title' => 'Image du header',
            'name' => 'subheader',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-1.jpg',
                'page@society-balsamine-list-post' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-2.jpg',
                'page@society-balsamine-single-post' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-3.jpg',
                'page@society-balsamine-team' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-4.jpg',
                'page@society-balsamine-gallery' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-5.jpg',
                'page@society-balsamine-contact' => '/src/Themes/Balsamine/Resources/public/img/background/subheader-6.jpg',
            ]
        ],
        /* Homepage */
        'balsamine_homepage_layout' => [
            'scope' => 'specified',
            'title' => 'Modèle de thème pour la page d\'accueil',
            'name' => 'homepage_model',
            'type' => 'select',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [
                'contents' => [
                    ['key' => 'static','value' => 'Statique'],
                    ['key' => 'slider','value' => 'Slider'],
                    ['key' => 'video','value' => 'Vidéo'],
                ],
                'multiple' => false
            ],
            'content' => ['page@society-balsamine-home' => 'static']
        ],
        'balsamine_homepage_1_background' => [
            'scope' => 'specified',
            'title' => 'Image du background pour le modèle "Statique"',
            'name' => 'homepage_1_background_image',
            'type' => 'media',
            'position' => 2,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-7.jpg']
        ],
        'balsamine_homepage_1_activities' => [
            'scope' => 'specified',
            'title' => 'Activités',
            'name' => 'homepage_1_activities',
            'type' => 'repeater',
            'position' => 3,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-home' => [0,1,2,3,4,5]
            ]
        ],
        'balsamine_homepage_1_activity_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'balsamine_homepage_1_activities',
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => [
                'page@society-balsamine-home' => ['Hair Care', 'Make Up', 'Facial', 'Massage', 'Nail Care', 'Waxing']
            ]
        ],
        'balsamine_homepage_2' => [
            'scope' => 'specified',
            'title' => 'Configuration pour le modèle "Slider"',
            'name' => 'homepage_2',
            'type' => 'repeater',
            'position' => 4,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-home' => [0,1]
            ]
        ],
        'balsamine_homepage_2_slider_image' => [
            'scope' => 'specified',
            'title' => 'Images du slider',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_homepage_2',
            'cf' => 'Balsamine Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-home' => [
                '/src/Themes/Balsamine/Resources/public/img/images-slider/wide7.jpg',
                '/src/Themes/Balsamine/Resources/public/img/images-slider/wide8.jpg'
            ],
            ]
        ],
        'balsamine_homepage_2_slider_title' => [
            'scope' => 'specified',
            'title' => 'Titre du slider',
            'name' => 'title',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_homepage_2',
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => [
                'BEAUTY SALON',
                'FROM HEAD TO TOE'
            ],
            ]
        ],
        'balsamine_homepage_2_slider_link' => [
            'scope' => 'specified',
            'title' => 'Lien du slider',
            'name' => 'link',
            'type' => 'string',
            'position' => 2,
            'parent' => 'balsamine_homepage_2',
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' =>
                ['#',''],
            ]
        ],
        'balsamine_homepage_3_background' => [
            'scope' => 'specified',
            'title' => 'Lien du vidéo de background pour le modèle "Vidéo"',
            'name' => 'homepage_3_background_video',
            'type' => 'string',
            'position' => 5,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/video/salon_1.mp4']
        ],
        'balsamine_homepage_3_background_title' => [
            'scope' => 'specified',
            'title' => 'Titre pour le modèle "Vidéo"',
            'name' => 'homepage_3_title',
            'type' => 'string',
            'position' => 6,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' =>'QUALITY & SERVICES']
        ],
        'balsamine_homepage_3_background_link' => [
            'scope' => 'specified',
            'title' => 'Lien pour le modèle "Vidéo"',
            'name' => 'homepage_3_link',
            'type' => 'string',
            'position' => 7,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' =>'#']
        ],
        'balsamine_homepage_left_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de gauche',
            'name' => 'left_top_bloc',
            'type' => 'wysiwyg',
            'position' => 8,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => '<h4>Special Promo</h4>
                                    <p>Our commitment to quality and services ensure our clients happy. With years of
                                        experiences and continuing education, our dedicated staff is ready to serve your
                                        beauty needs. We\'re happy to help you decide the best look.</p>'
            ]
        ],
        'balsamine_homepage_right_bloc' => [
            'scope' => 'specified',
            'title' => 'Bloc de droite',
            'name' => 'right_top_bloc',
            'type' => 'wysiwyg',
            'position' => 9,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => '<h4>Get Discount 50%</h4>
                                    <p>Our commitment to quality and services ensure our clients happy. With years of
                                        experiences and continuing education, our dedicated staff is ready to serve your
                                        beauty needs. We\'re happy to help you decide the best look.</p>'
            ]
        ],
        'balsamine_homepage_about_us_image' => [
            'scope' => 'specified',
            'title' => 'Image pour de gauche',
            'name' => 'about_us_image',
            'type' => 'media',
            'position' => 10,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-side-9.jpg']
        ],
        'balsamine_homepage_about_us' => [
            'scope' => 'specified',
            'title' => 'A propos de nous',
            'name' => 'about_us',
            'type' => 'wysiwyg',
            'position' => 11,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => '<p>They were so friendly and it was pleasure to get my hair done there. I\'m very happy with
                            services their provided. I will recommend this salon to my family and friends. Their
                            pricing was competitive and their staff is professional.
                            <span>Lynda, Customer</span>
                        </p>'
            ]
        ],
        'balsamine_homepage_actu_background' => [
            'scope' => 'specified',
            'title' => 'Image pour les actualités',
            'name' => 'news_background',
            'type' => 'media',
            'position' => 12,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-home' => '/src/Themes/Balsamine/Resources/public/img/background/bg-10.jpg']
        ],
        'balsamine_homepage_actu_text' => [
            'scope' => 'specified',
            'title' => 'Texte pour les actualités',
            'name' => 'news_title',
            'type' => 'string',
            'position' => 13,
            'parent' => null,
            'cf' => 'Balsamine Home Page',
            'data' => [],
            'content' => ['page@society-balsamine-home' => 'Découvrez nos actualités']
        ],
        /* Team Page */
        'balsamine_team' => [
            'scope' => 'specified',
            'title' => 'Equipes',
            'name' => 'teams',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Team Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-team' => [0,1,2,3]
            ]
        ],
        'balsamine_team_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_team',
            'cf' => 'Balsamine Team Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-team' => [
                    '/src/Themes/Balsamine/Resources/public/img/team/team_pic_1.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/team/team_pic_2.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/team/team_pic_3.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/team/team_pic_4.jpg',
                ]
            ]
        ],
        'balsamine_team_name' => [
            'scope' => 'specified',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 1,
            'parent' => 'balsamine_team',
            'cf' => 'Balsamine Team Page',
            'data' => [],
            'content' => ['page@society-balsamine-team' =>  ['Briana', 'Jessica', 'Rachel', 'Emma'],
            ]
        ],
        'balsamine_team_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 2,
            'parent' => 'balsamine_team',
            'cf' => 'Balsamine Team Page',
            'data' => [],
            'content' => ['page@society-balsamine-team' => [
                    'She is our Lead Hair Designer and the creative inspiration. She\'s happy to help you decide the best hair style.',
                    'She is our Lead Hair Designer and the creative inspiration. She\'s happy to help you decide the best hair style.',
                    'She is our Lead Hair Designer and the creative inspiration. She\'s happy to help you decide the best hair style.',
                    'She is our Lead Hair Designer and the creative inspiration. She\'s happy to help you decide the best hair style.',
                ]
            ]
        ],
        /* Gallery Page */
        'balsamine_gallery_disposition' => [
            'scope' => 'specified',
            'title' => 'Disposition de la galerie',
            'name' => 'gallery_column',
            'type' => 'select',
            'position' => 0,
            'parent' => null,
            'cf' => 'Balsamine Gallery Page',
            'data' => [
                'multiple' => false,
                'contents' => [
                    ['key' => '4', 'value' => '4 colonnes'],
                    ['key' => '3', 'value' => '3 colonnes'],
                    ['key' => '2', 'value' => '2 colonnes']
                ]
            ],
            'content' => ['page@society-balsamine-gallery' => '4',]
        ],
        'balsamine_gallery' => [
            'scope' => 'specified',
            'title' => 'Galerie',
            'name' => 'galleries',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Balsamine Gallery Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-balsamine-gallery' => [0,1,2,3,4,5,6,7]
            ]
        ],
        'balsamine_gallery_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'balsamine_gallery',
            'cf' => 'Balsamine Gallery Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-balsamine-gallery' => [
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_1.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_2.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_3.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_4.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_5.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_6.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_7.jpg',
                    '/src/Themes/Balsamine/Resources/public/img/gallery/gal_8.jpg',
                ]
            ]
        ]
    ];

    public function load(ObjectManager $manager)
    {
        $this->addCustomFieldCallback('post', 'getCustomFieldPost');
        $this->loadAdminCustomField($manager);
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
            'Jet\Themes\Balsamine\Fixtures\LoadPage',
            'Jet\Themes\Balsamine\Fixtures\LoadWebsite',
            'Jet\Themes\Balsamine\Fixtures\LoadCustomField'
        ];
    }
}