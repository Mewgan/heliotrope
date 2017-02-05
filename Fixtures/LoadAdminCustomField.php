<?php

namespace Jet\Themes\Heliotrope\Fixtures;

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
        /* Heliotrope fields */
        'heliotrope_logo' => [
            'scope' => 'global',
            'title' => 'Logo',
            'name' => 'logo',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Heliotrope/Resources/public/img/logo-wide-white.png']
        ],
        'heliotrope_second_logo' => [
            'scope' => 'global',
            'title' => 'Logo secondaire',
            'name' => 'sub_logo',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/src/Themes/Heliotrope/Resources/public/img/logo-wide.png']
        ],
        'heliotrope_opening_hours' => [
            'scope' => 'global',
            'title' => 'Horaires d\'ouverture',
            'name' => 'opening_hours',
            'type' => 'wysiwyg',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [],
            'content' => ['value' => '<ul class="list-border">
                                <li class="clearfix"><span> Mon - Tues :  </span>
                                    <div class="value pull-right"> 6.00 am - 10.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Wednes - Thurs :</span>
                                    <div class="value pull-right"> 8.00 am - 6.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Fri : </span>
                                    <div class="value pull-right"> 3.00 pm - 8.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Sun : </span>
                                    <div class="value pull-right"> Colosed</div>
                                </li>
                            </ul>']
        ],
        'heliotrope_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 2,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0,1]
            ]
        ],
        'heliotrope_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'heliotrope_social',
            'cf' => 'Heliotrope Default Global',
            'data' => [],
            'content' => [
                'value' => [
                    'Facebook',
                    'Twitter',
                ]
            ]
        ],
        'heliotrope_social_link' => [
            'scope' => 'global',
            'title' => 'Lien',
            'name' => 'link',
            'type' => 'string',
            'position' => 1,
            'parent' => 'heliotrope_social',
            'cf' => 'Heliotrope Default Global',
            'data' => [],
            'content' => [
                'value' => [
                    '#',
                    '#',
                ]
            ]
        ],
        'heliotrope_booking' => [
            'scope' => 'global',
            'title' => 'Lien du rendez-vous en ligne',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 3,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [],
            'content' => ['value' => '#']
        ],
        /* Theme specific */
        'heliotrope_layout_mode' => [
            'scope' => 'global',
            'title' => 'Disposition du thème',
            'name' => 'layout_mode',
            'type' => 'select',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'boxed','value' => 'Boxed'],
                    ['key' => 'full','value' => 'Full Width'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'full']
        ],
        'heliotrope_theme_color' => [
            'scope' => 'global',
            'title' => 'Couleur du thème',
            'name' => 'theme_color',
            'type' => 'select',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'green','value' => 'Vert'],
                    ['key' => 'orange','value' => 'Orange'],
                    ['key' => 'red','value' => 'Rouge'],
                    ['key' => 'blue','value' => 'Bleu'],
                    ['key' => 'sky-blue','value' => 'Bleu ciel'],
                    ['key' => 'sky-blue-light','value' => 'Bleu ciel light'],
                    ['key' => 'lemon','value' => 'Citron'],
                    ['key' => 'yellow','value' => 'Jaune'],
                    ['key' => 'rose','value' => 'Rose'],
                    ['key' => 'gray','value' => 'Gris'],
                    ['key' => 'blue-gray','value' => 'Bleu Gris'],
                    ['key' => 'brown','value' => 'Marron'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'lemon']
        ],
        'heliotrope_header_color' => [
            'scope' => 'global',
            'title' => 'Couleur du menu',
            'name' => 'navigation_color',
            'type' => 'select',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'default','value' => 'Défaut'],
                    ['key' => 'blue','value' => 'Bleu'],
                    ['key' => 'green','value' => 'Vert'],
                    ['key' => 'red','value' => 'Rouge'],
                    ['key' => 'orange','value' => 'Orange'],
                    ['key' => 'yellow','value' => 'Jaune'],
                    ['key' => 'purple','value' => 'Violet'],
                    ['key' => 'pink','value' => 'Rose'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'default']
        ],
        'heliotrope_header_style' => [
            'scope' => 'global',
            'title' => 'Position du menu',
            'name' => 'navigation_position',
            'type' => 'select',
            'position' => 2,
            'parent' => null,
            'cf' => 'Heliotrope Specific Global',
            'data' => [
                'contents' => [
                    ['key' => 'menuzord-rounded-boxed','value' => 'Défaut'],
                    ['key' => 'menuzord-border-top','value' => 'Border top'],
                    ['key' => 'menuzord-border-bottom','value' => 'Border bottom'],
                    ['key' => 'menuzord-border-boxed','value' => 'Border boxed'],
                    ['key' => 'menuzord-border-left','value' => 'Border left'],
                    ['key' => 'menuzord-border-top-bottom','value' => 'Border top bottom'],
                    ['key' => 'menuzord-border-trace','value' => 'Border trace'],
                    ['key' => 'menuzord-boxed','value' => 'Boxed'],
                    ['key' => 'menuzord-colored','value' => 'Colored'],
                    ['key' => 'menuzord-dark','value' => 'Dark'],
                    ['key' => 'menuzord-gradient','value' => 'Gradient'],
                    ['key' => 'menuzord-shadow','value' => 'Shadow'],
                    ['key' => 'menuzord-strip','value' => 'Strip'],
                    ['key' => 'menuzord-subcolored','value' => 'Sub-Colored'],
                    ['key' => 'menuzord-top-bottom-boxed-border','value' => 'Top Bottom Boxed Border'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => 'menuzord-rounded-boxed']
        ],
        'heliotrope_title_font' => [
            'scope' => 'global',
            'title' => 'Police des titres',
            'name' => 'title_font',
            'type' => 'select',
            'position' => 3,
            'parent' => null,
            'cf' => 'Heliotrope Specific Global',
            'data' => [
                'contents' => [
                    ['key' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans",'value' => 'Open Sans'],
                    ['key' => "'Droid Sans', sans-serif|https://fonts.googleapis.com/css?family=Droid+Sans",'value' => 'Droid Sans'],
                    ['key' => "'PT Sans', sans-serif|https://fonts.googleapis.com/css?family=PT+Sans",'value' => 'PT Sans'],
                    ['key' => "'Source Sans Pro', sans-serif|https://fonts.googleapis.com/css?family=Source+Sans+Pro",'value' => 'Source Sans Pro'],
                    ['key' => "'Raleway', sans-serif|https://fonts.googleapis.com/css?family=Raleway",'value' => 'Raleway'],
                    ['key' => "'Josefin Slab', serif|https://fonts.googleapis.com/css?family=Josefin+Slab",'value' => 'Josefin Slab'],
                    ['key' => "'Roboto', sans-serif|https://fonts.googleapis.com/css?family=Roboto",'value' => 'Roboto'],
                    ['key' => "'Droid Serif', serif|https://fonts.googleapis.com/css?family=Droid+Serif",'value' => 'Droid Serif'],
                    ['key' => "'Oswald', sans-serif|https://fonts.googleapis.com/css?family=Oswald",'value' => 'Oswald'],
                    ['key' => "'Lato', sans-serif|https://fonts.googleapis.com/css?family=Lato",'value' => 'Lato'],
                    ['key' => "'Arvo', serif|https://fonts.googleapis.com/css?family=Arvo",'value' => 'Arvo'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans"]
        ],
        'heliotrope_body_font' => [
            'scope' => 'global',
            'title' => 'Police du site',
            'name' => 'body_font',
            'type' => 'select',
            'position' => 4,
            'parent' => null,
            'cf' => 'Heliotrope Specific Global',
            'data' => [
                'contents' => [
                    ['key' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans",'value' => 'Open Sans'],
                    ['key' => "'Droid Sans', sans-serif|https://fonts.googleapis.com/css?family=Droid+Sans",'value' => 'Droid Sans'],
                    ['key' => "'PT Sans', sans-serif|https://fonts.googleapis.com/css?family=PT+Sans",'value' => 'PT Sans'],
                    ['key' => "'Source Sans Pro', sans-serif|https://fonts.googleapis.com/css?family=Source+Sans+Pro",'value' => 'Source Sans Pro'],
                    ['key' => "'Raleway', sans-serif|https://fonts.googleapis.com/css?family=Raleway",'value' => 'Raleway'],
                    ['key' => "'Josefin Slab', serif|https://fonts.googleapis.com/css?family=Josefin+Slab",'value' => 'Josefin Slab'],
                    ['key' => "'Roboto', sans-serif|https://fonts.googleapis.com/css?family=Roboto",'value' => 'Roboto'],
                    ['key' => "'Droid Serif', serif|https://fonts.googleapis.com/css?family=Droid+Serif",'value' => 'Droid Serif'],
                    ['key' => "'Oswald', sans-serif|https://fonts.googleapis.com/css?family=Oswald",'value' => 'Oswald'],
                    ['key' => "'Lato', sans-serif|https://fonts.googleapis.com/css?family=Lato",'value' => 'Lato'],
                    ['key' => "'Arvo', serif|https://fonts.googleapis.com/css?family=Arvo",'value' => 'Arvo'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans"]
        ],
        /* Page */
        'heliotrope_page' => [
            'scope' => 'specified',
            'title' => 'Image du header',
            'name' => 'subheader',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-heliotrope-home' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg9.jpg',
                'page@society-heliotrope-list-post' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg1.jpg',
                'page@society-heliotrope-single-post' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg2.jpg',
                'page@society-heliotrope-price' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg3.jpg',
                'page@society-heliotrope-gallery' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg4.jpg',
                'page@society-heliotrope-contact' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg9.jpg',
            ]
        ],
        /* Homepage */
        'heliotrope_homepage_header_text' => [
            'scope' => 'specified',
            'title' => 'Texte du header',
            'name' => 'homepage_header_text',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [],
            'content' => [
                'page@society-heliotrope-home' => '<h1 class="text-theme-colored text-uppercase font-playfair font-weight-600 font-100 line-height-1 m-0">Men\'s</h1>
                <h2 class="font-playfair font-48 text-white font-weight-400 m-0"> Hairstyle &amp; Fashion</h2>
                <p class="text-white font-weight-200 font-18 mt-10">Every day we bring hope to millions of children in the world\'s <br>hardest places as a sign of God\'s unconditional love.</p>               
             '
            ]
        ],
        'heliotrope_homepage_header_text_align' => [
            'scope' => 'specified',
            'title' => 'Aligner le texte à',
            'name' => 'homepage_header_text_align',
            'type' => 'select',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [
                'contents' => [
                    ['key' => 'left','value' => 'Gauche'],
                    ['key' => 'center','value' => 'Centre'],
                    ['key' => 'right','value' => 'Droite'],
                ],
                'multiple' => false
            ],
            'content' => ['page@society-heliotrope-home' => 'right']
        ],
        'heliotrope_homepage_about_us' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'homepage_about_us',
            'type' => 'post',
            'website' => 'Aster Website',
            'position' => 2,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-heliotrope-home' => 'heliotrope-about-us']
        ],
        'heliotrope_team' => [
            'scope' => 'specified',
            'title' => 'Equipes',
            'name' => 'teams',
            'type' => 'repeater',
            'position' => 3,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-home' => [0,1,2,3,4]
            ]
        ],
        'heliotrope_team_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'heliotrope_team',
            'cf' => 'Heliotrope Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-heliotrope-home' => [
                '/src/Themes/Heliotrope/Resources/public/img/team/1.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/2.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/3.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/4.png',
                '/src/Themes/Heliotrope/Resources/public/img/team/5.png',
                ]
            ]
        ],
        'heliotrope_team_name' => [
            'scope' => 'specified',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 1,
            'parent' => 'heliotrope_team',
            'cf' => 'Heliotrope Home Page',
            'data' => [],
            'content' => ['page@society-heliotrope-home' =>  ['Briana', 'Jessica', 'Rachel', 'Emma', 'Delphine'],
            ]
        ],
        'heliotrope_team_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'string',
            'position' => 2,
            'parent' => 'heliotrope_team',
            'cf' => 'Heliotrope Home Page',
            'data' => [],
            'content' => ['page@society-heliotrope-home' => ['Hair Expert','Hair Expert','Hair Expert','Hair Expert','Hair Expert']
            ]
        ],
        'heliotrope_homepage_partners' => [
            'scope' => 'specified',
            'title' => 'Partenaire',
            'name' => 'partners',
            'type' => 'repeater',
            'position' => 4,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-home' => [0,1,2,3,4,5,6]
            ]
        ],
        'heliotrope_homepage_partners_image' => [
            'scope' => 'specified',
            'title' => 'Images du slider',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'heliotrope_homepage_partners',
            'cf' => 'Heliotrope Home Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-heliotrope-home' => [
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/clients/1.jpg',
            ],
            ]
        ],
        /* Gallery Page */
        'heliotrope_gallery_category' => [
            'scope' => 'specified',
            'title' => 'Catégories',
            'name' => 'gallery_categories',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Gallery Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-gallery' => [0,1,2]
            ]
        ],
        'heliotrope_gallery_category_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'heliotrope_gallery_category',
            'cf' => 'Heliotrope Gallery Page',
            'data' => [],
            'content' => [
                'page@society-heliotrope-gallery' => ['Branding','Design','Photography']
            ]
        ],
        'heliotrope_gallery' => [
            'scope' => 'specified',
            'title' => 'Galerie',
            'name' => 'galleries',
            'type' => 'repeater',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Gallery Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-gallery' => [0,1,2,3,4,5,6]
            ]
        ],
        'heliotrope_gallery_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'heliotrope_gallery',
            'cf' => 'Heliotrope Gallery Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-heliotrope-gallery' => [
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/1.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/h2.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/4.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/5.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/6.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/portfolio/7.jpg',
            ]
            ]
        ],
        'heliotrope_gallery_cat' => [
            'scope' => 'specified',
            'title' => 'Catégorie',
            'name' => 'category',
            'type' => 'string',
            'position' => 1,
            'parent' => 'heliotrope_gallery',
            'cf' => 'Heliotrope Gallery Page',
            'data' => [],
            'content' => ['page@society-heliotrope-gallery' => ['Photography','Branding','Design', 'Branding','Photography','Design', 'Branding']
            ]
        ],
        /* Price page*/
        'heliotrope_price' => [
            'scope' => 'specified',
            'title' => 'Catégories',
            'name' => 'categories',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Price Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-price' => [0,1,2]
            ]
        ],
        'heliotrope_price_cat' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'heliotrope_price',
            'cf' => 'Heliotrope Price Page',
            'data' => [],
            'content' => ['page@society-heliotrope-price' => ['Femme','Homme','Enfant']]
        ],
        'heliotrope_price_list' => [
            'scope' => 'specified',
            'title' => 'Services',
            'name' => 'services',
            'type' => 'repeater',
            'position' => 1,
            'parent' => 'heliotrope_price',
            'cf' => 'Heliotrope Price Page',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-price' => [
                    0 => [0,1,2,3,4,5],
                    1 => [0,1,2],
                    2 => [0,1,2]
                ]
            ]
        ],
        'heliotrope_price_list_title' => [
            'scope' => 'specified',
            'title' => 'Titre',
            'name' => 'title',
            'type' => 'string',
            'position' => 0,
            'parent' => 'heliotrope_price_list',
            'cf' => 'Heliotrope Price Page',
            'data' => [],
            'content' => ['page@society-heliotrope-price' =>
                [
                    ['WOMAN\'S HAIRCUT','WOMAN\'S HAIRCUT', 'WOMAN\'S HAIRCUT', 'WOMAN\'S HAIRCUT', 'WOMAN\'S HAIRCUT', 'WOMAN\'S HAIRCUT'],
                    ['MAN\'S HAIRCUT','MAN\'S HAIRCUT', 'MAN\'S HAIRCUT'],
                    ['CHILD\'S HAIRCUT','CHILD\'S HAIRCUT', 'CHILD\'S HAIRCUT'],
                ]
            ]
        ],
        'heliotrope_price_list_image' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 1,
            'parent' => 'heliotrope_price_list',
            'cf' => 'Heliotrope Price Page',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-heliotrope-price' =>
                [
                    [
                        '/src/Themes/Heliotrope/Resources/public/img/pricing/s1.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/pricing/s2.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/pricing/s3.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/pricing/s4.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/pricing/s2.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/pricing/s1.jpg',
                    ],
                    [
                        '/src/Themes/Heliotrope/Resources/public/img/gallery/m1.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/gallery/m2.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/gallery/m3.jpg',
                    ],
                    [
                        '/src/Themes/Heliotrope/Resources/public/img/products/1.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/products/1.jpg',
                        '/src/Themes/Heliotrope/Resources/public/img/products/1.jpg',
                    ],
                ]
            ]
        ],
        'heliotrope_price_list_price' => [
            'scope' => 'specified',
            'title' => 'Prix',
            'name' => 'price',
            'type' => 'string',
            'position' => 2,
            'parent' => 'heliotrope_price_list',
            'cf' => 'Heliotrope Price Page',
            'data' => [],
            'content' => ['page@society-heliotrope-price' =>
                [
                    ['80€','45€', '75€', '55€', '100€', '60€'],
                    ['20€','35€', '40€'],
                    ['8€','12€', '15€'],
                ]
            ]
        ],
        'heliotrope_price_list_description' => [
            'scope' => 'specified',
            'title' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'position' => 3,
            'parent' => 'heliotrope_price_list',
            'cf' => 'Heliotrope Price Page',
            'data' => [],
            'content' => ['page@society-heliotrope-price' =>
                [
                    [
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?'],
                    [
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?'
                    ],
                    [
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?',
                        'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at'
                    ],
                ]
            ]
        ],
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
            'Jet\Themes\Heliotrope\Fixtures\LoadMedia',
            'Jet\Themes\Heliotrope\Fixtures\LoadPage',
            'Jet\Themes\Heliotrope\Fixtures\LoadWebsite',
            'Jet\Themes\Heliotrope\Fixtures\LoadCustomField'
        ];
    }
}