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
        'heliotrope_seo_title' => [
            'scope' => 'specified',
            'title' => 'Meta titre',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Seo',
            'data' => [],
            'content' => []
        ],
        'heliotrope_seo_description' => [
            'scope' => 'specified',
            'title' => 'Meta description',
            'name' => 'meta_description',
            'type' => 'textarea',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Seo',
            'data' => [],
            'content' => []
        ],
        'heliotrope_seo_keywords' => [
            'scope' => 'specified',
            'title' => 'Meta mots clef',
            'name' => 'meta_keywords',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Heliotrope Seo',
            'data' => [],
            'content' => []
        ],
        /* Global CSS and JS */
        'heliotrope_css' => [
            'scope' => 'global',
            'title' => 'Css',
            'name' => 'css_block',
            'type' => 'editor',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Custom Css & Js',
            'data' => [
                'file_type' => 'css'
            ],
            'content' => ['value' => '']
        ],
        'heliotrope_js' => [
            'scope' => 'global',
            'title' => 'Javascript',
            'name' => 'js_block',
            'type' => 'editor',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Custom Css & Js',
            'data' => [
                'file_type' => 'javascript'
            ],
            'content' => ['value' => '']
        ],
        /* Global social network */
        'heliotrope_social' => [
            'scope' => 'global',
            'title' => 'Réseaux sociaux',
            'name' => 'social_networks',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Social Network',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows' => [0, 1]
            ]
        ],
        'heliotrope_social_name' => [
            'scope' => 'global',
            'title' => 'Nom',
            'name' => 'name',
            'type' => 'string',
            'position' => 0,
            'parent' => 'heliotrope_social',
            'cf' => 'Heliotrope Social Network',
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
            'cf' => 'Heliotrope Social Network',
            'data' => [],
            'content' => [
                'value' => [
                    '',
                    '',
                ]
            ]
        ],
        /* Global seo */
        'heliotrope_global_seo_analytics' => [
            'scope' => 'global',
            'title' => 'Google | Analytics',
            'name' => 'meta_title',
            'type' => 'string',
            'position' => 0,
            'parent' => null,
            'description' => 'Renseigner votre script analytics',
            'cf' => 'Heliotrope Global Seo',
            'data' => [],
            'content' => []
        ],
        /* Global */
        'heliotrope_favicon' => [
            'scope' => 'global',
            'title' => 'Favicon',
            'name' => 'favicon',
            'type' => 'media',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['value' => '/public/media/default/favicon.ico']
        ],
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
                                <li class="clearfix"><span> Lun - Mar :  </span>
                                    <div class="value pull-right"> 6h00 - 22h00 </div>
                                </li>
                                <li class="clearfix"><span> Mer - Jeu :</span>
                                    <div class="value pull-right"> 8h00 - 18h00</div>
                                </li>
                                <li class="clearfix"><span> Ven - Sam : </span>
                                    <div class="value pull-right"> 15h00 - 20h00</div>
                                </li>
                                <li class="clearfix"><span> Dim : </span>
                                    <div class="value pull-right"> Fermé</div>
                                </li>
                            </ul>']
        ],
        'heliotrope_booking' => [
            'scope' => 'global',
            'title' => 'Lien du rendez-vous en ligne',
            'name' => 'booking_link',
            'type' => 'string',
            'position' => 2,
            'parent' => null,
            'cf' => 'Heliotrope Default Global',
            'data' => [],
            'content' => ['value' => '']
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
                    ['key' => 'boxed', 'value' => 'Boxed'],
                    ['key' => 'full', 'value' => 'Full Width'],
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
                    ['key' => 'green', 'value' => 'Vert'],
                    ['key' => 'orange', 'value' => 'Orange'],
                    ['key' => 'red', 'value' => 'Rouge'],
                    ['key' => 'blue', 'value' => 'Bleu'],
                    ['key' => 'sky-blue', 'value' => 'Bleu ciel'],
                    ['key' => 'sky-blue-light', 'value' => 'Bleu ciel light'],
                    ['key' => 'lemon', 'value' => 'Citron'],
                    ['key' => 'yellow', 'value' => 'Jaune'],
                    ['key' => 'rose', 'value' => 'Rose'],
                    ['key' => 'gray', 'value' => 'Gris'],
                    ['key' => 'blue-gray', 'value' => 'Bleu Gris'],
                    ['key' => 'brown', 'value' => 'Marron'],
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
                    ['key' => 'default', 'value' => 'Défaut'],
                    ['key' => 'blue', 'value' => 'Bleu'],
                    ['key' => 'green', 'value' => 'Vert'],
                    ['key' => 'red', 'value' => 'Rouge'],
                    ['key' => 'orange', 'value' => 'Orange'],
                    ['key' => 'yellow', 'value' => 'Jaune'],
                    ['key' => 'purple', 'value' => 'Violet'],
                    ['key' => 'pink', 'value' => 'Rose'],
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
                    ['key' => 'menuzord-rounded-boxed', 'value' => 'Défaut'],
                    ['key' => 'menuzord-border-top', 'value' => 'Border top'],
                    ['key' => 'menuzord-border-bottom', 'value' => 'Border bottom'],
                    ['key' => 'menuzord-border-boxed', 'value' => 'Border boxed'],
                    ['key' => 'menuzord-border-left', 'value' => 'Border left'],
                    ['key' => 'menuzord-border-top-bottom', 'value' => 'Border top bottom'],
                    ['key' => 'menuzord-border-trace', 'value' => 'Border trace'],
                    ['key' => 'menuzord-boxed', 'value' => 'Boxed'],
                    ['key' => 'menuzord-colored', 'value' => 'Colored'],
                    ['key' => 'menuzord-dark', 'value' => 'Dark'],
                    ['key' => 'menuzord-gradient', 'value' => 'Gradient'],
                    ['key' => 'menuzord-shadow', 'value' => 'Shadow'],
                    ['key' => 'menuzord-strip', 'value' => 'Strip'],
                    ['key' => 'menuzord-subcolored', 'value' => 'Sub-Colored'],
                    ['key' => 'menuzord-top-bottom-boxed-border', 'value' => 'Top Bottom Boxed Border'],
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
                    ['key' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans", 'value' => 'Open Sans'],
                    ['key' => "'Droid Sans', sans-serif|https://fonts.googleapis.com/css?family=Droid+Sans", 'value' => 'Droid Sans'],
                    ['key' => "'PT Sans', sans-serif|https://fonts.googleapis.com/css?family=PT+Sans", 'value' => 'PT Sans'],
                    ['key' => "'Source Sans Pro', sans-serif|https://fonts.googleapis.com/css?family=Source+Sans+Pro", 'value' => 'Source Sans Pro'],
                    ['key' => "'Raleway', sans-serif|https://fonts.googleapis.com/css?family=Raleway", 'value' => 'Raleway'],
                    ['key' => "'Josefin Slab', serif|https://fonts.googleapis.com/css?family=Josefin+Slab", 'value' => 'Josefin Slab'],
                    ['key' => "'Roboto', sans-serif|https://fonts.googleapis.com/css?family=Roboto", 'value' => 'Roboto'],
                    ['key' => "'Droid Serif', serif|https://fonts.googleapis.com/css?family=Droid+Serif", 'value' => 'Droid Serif'],
                    ['key' => "'Oswald', sans-serif|https://fonts.googleapis.com/css?family=Oswald", 'value' => 'Oswald'],
                    ['key' => "'Lato', sans-serif|https://fonts.googleapis.com/css?family=Lato", 'value' => 'Lato'],
                    ['key' => "'Arvo', serif|https://fonts.googleapis.com/css?family=Arvo", 'value' => 'Arvo'],
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
                    ['key' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans", 'value' => 'Open Sans'],
                    ['key' => "'Droid Sans', sans-serif|https://fonts.googleapis.com/css?family=Droid+Sans", 'value' => 'Droid Sans'],
                    ['key' => "'PT Sans', sans-serif|https://fonts.googleapis.com/css?family=PT+Sans", 'value' => 'PT Sans'],
                    ['key' => "'Source Sans Pro', sans-serif|https://fonts.googleapis.com/css?family=Source+Sans+Pro", 'value' => 'Source Sans Pro'],
                    ['key' => "'Raleway', sans-serif|https://fonts.googleapis.com/css?family=Raleway", 'value' => 'Raleway'],
                    ['key' => "'Josefin Slab', serif|https://fonts.googleapis.com/css?family=Josefin+Slab", 'value' => 'Josefin Slab'],
                    ['key' => "'Roboto', sans-serif|https://fonts.googleapis.com/css?family=Roboto", 'value' => 'Roboto'],
                    ['key' => "'Droid Serif', serif|https://fonts.googleapis.com/css?family=Droid+Serif", 'value' => 'Droid Serif'],
                    ['key' => "'Oswald', sans-serif|https://fonts.googleapis.com/css?family=Oswald", 'value' => 'Oswald'],
                    ['key' => "'Lato', sans-serif|https://fonts.googleapis.com/css?family=Lato", 'value' => 'Lato'],
                    ['key' => "'Arvo', serif|https://fonts.googleapis.com/css?family=Arvo", 'value' => 'Arvo'],
                ],
                'multiple' => false
            ],
            'content' => ['value' => "'Open Sans', sans-serif|https://fonts.googleapis.com/css?family=Open+Sans"]
        ],
        /* Page */
        'heliotrope_page' => [
            'scope' => 'specified',
            'title' => 'Image du bandeau du haut (Header)',
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
                'page@society-heliotrope-service' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg1.jpg',
                'page@society-heliotrope-actualite' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg1.jpg',
                'page@society-heliotrope-single-post' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg2.jpg',
                'page@society-heliotrope-price' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg3.jpg',
                'page@society-heliotrope-gallery' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg4.jpg',
                'page@society-heliotrope-contact' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg9.jpg',
            ]
        ],
        /* Homepage */
        'heliotrope_homepage_header_text' => [
            'scope' => 'specified',
            'title' => 'Texte du bandeau du haut (Header)',
            'name' => 'homepage_header_text',
            'type' => 'wysiwyg',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [],
            'content' => [
                'page@society-heliotrope-home' => '<h1 style="text-align: right" class="text-theme-colored text-uppercase font-playfair font-weight-600 font-100 line-height-1 m-0">Coiffure</h1>
                <h2 style="text-align: right" class="font-playfair font-48 text-white font-weight-400 m-0"> féminine et mode</h2>
                <p style="text-align: right" class="text-white font-weight-200 font-18 mt-10">Chaque jour nous proposons à nos clients un accueil chaleureux et des prestations de qualité.<br/> Découvrez notre salon dès aujourd\'hui et n\'hésitez pas à prendre votre premier RDV en ligne !</p>{% if booking_link != "" %}
                <a style="text-align: right;float:right;" href="{{booking_link}}" class="btn btn-theme-colored btn-circled btn-lg mt-10">Réserver</a>{% endif %}'
            ]
        ],
        'heliotrope_homepage_about_us' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'homepage_about_us',
            'type' => 'post',
            'website' => 'Aster Website',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Home Page',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-heliotrope-home' => 'heliotrope-about-us']
        ],
        /* Homepage slider */
        'heliotrope_homepage_slider' => [
            'scope' => 'specified',
            'title' => 'Bandeau défilant (Slider)',
            'name' => 'homepage_slider',
            'type' => 'repeater',
            'position' => 0,
            'parent' => null,
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-home-slider' => [0, 1, 2]
            ]
        ],
        'heliotrope_homepage_slider_img' => [
            'scope' => 'specified',
            'title' => 'Image',
            'name' => 'image',
            'type' => 'media',
            'position' => 0,
            'parent' => 'heliotrope_homepage_slider',
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => ['page@society-heliotrope-home-slider' => [
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg9.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg3.jpg',
                '/src/Themes/Heliotrope/Resources/public/img/bg/bg2.jpg',
            ],
            ]
        ],
        'heliotrope_homepage_slider_texts' => [
            'scope' => 'specified',
            'title' => 'Textes',
            'name' => 'layers',
            'type' => 'repeater',
            'position' => 1,
            'parent' => 'heliotrope_homepage_slider',
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [
                'min_row' => '2',
                'max_row' => '2'
            ],
            'content' => [
                'type' => 'repeater',
                'rows@page@society-heliotrope-home-slider' => [
                    0 => [0, 1],
                    1 => [0, 1],
                    2 => [0, 1]
                ]
            ]
        ],
        'heliotrope_homepage_slider_text' => [
            'scope' => 'specified',
            'title' => 'Texte',
            'name' => 'text',
            'type' => 'string',
            'position' => 0,
            'parent' => 'heliotrope_homepage_slider_texts',
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [],
            'content' => [
                'page@society-heliotrope-home-slider' => [
                    ['Révélez votre', 'Style'],
                    ['- depuis 1986 -', 'Nous prenons soin de vous '],
                    ['Le meilleur barbier de ', 'Paris']
                ]
            ]
        ],
        'heliotrope_homepage_slider_attribute' => [
            'scope' => 'specified',
            'title' => 'Attributs',
            'name' => 'attribute',
            'type' => 'json',
            'access_level' => 2,
            'position' => 1,
            'parent' => 'heliotrope_homepage_slider_texts',
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [],
            'content' => [
                'page@society-heliotrope-home-slider' => [
                    [
                        [
                            'class' => "tp-caption tp-resizeme font-playfair text-white font-weight-400 m-0",
                            'data-x' => "['right']",
                            'data-hoffset' => "['30']",
                            'data-y' => "['middle']",
                            'data-voffset' => "['-160']",
                            'data-fontsize' => "['48']",
                            'data-lineheight' => "['78']",
                            'data-width' => "none",
                            'data-height' => "none",
                            'data-whitespace' => "nowrap",
                            'data-transform_idle' => "o:1;s:500",
                            'data-transform_in' => "y:100;scaleX:1;scaleY:1;opacity:0;",
                            'data-transform_out' => "x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;",
                            'data-mask_in' => "x:0px;y:0px;s:inherit;e:inherit;",
                            'data-mask_out' => "x:inherit;y:inherit;s:inherit;e:inherit;",
                            'data-start' => "1000",
                            'data-splitin' => "none",
                            'data-splitout' => "none",
                            'data-responsive_offset' => "on",
                            'style' => "z-index: 5; white-space: nowrap; font-weight:700;"
                        ],
                        [
                            'class' => "tp-caption tp-resizeme text-theme-colored text-uppercase font-playfair font-weight-600",
                            'data-x' => "['right']",
                            'data-hoffset' => "['30']",
                            'data-y' => "['middle']",
                            'data-voffset' => "['-80']",
                            'data-fontsize' => "['90']",
                            'data-lineheight' => "['114']",
                            'data-width' => "none",
                            'data-height' => "none",
                            'data-whitespace' => "nowrap",
                            'data-transform_idle' => "o:1;s:500",
                            'data-transform_in' => "y:100;scaleX:1;scaleY:1;opacity:0;",
                            'data-transform_out' => "x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;",
                            'data-mask_in' => "x:0px;y:0px;s:inherit;e:inherit;",
                            'data-mask_out' => "x:inherit;y:inherit;s:inherit;e:inherit;",
                            'data-start' => "1000",
                            'data-splitin' => "none",
                            'data-splitout' => "none",
                            'data-responsive_offset' => "on",
                            'style' => "z-index: 5; white-space: nowrap; font-weight:700;"
                        ],
                    ],
                    [
                        [
                            'class' => "tp-caption tp-resizeme text-center text-white",
                            'data-x' => "['center']",
                            'data-hoffset' => "['0']",
                            'data-y' => "['middle']",
                            'data-voffset' => "['-70']",
                            'data-fontsize' => "['24']",
                            'data-lineheight' => "['64']",
                            'data-width' => "none",
                            'data-height' => "none",
                            'data-whitespace' => "nowrap",
                            'data-transform_idle' => "o:1;s:500",
                            'data-transform_in' => "y:100;scaleX:1;scaleY:1;opacity:0;",
                            'data-transform_out' => "x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;",
                            'data-mask_in' => "x:0px;y:0px;s:inherit;e:inherit;",
                            'data-mask_out' => "x:inherit;y:inherit;s:inherit;e:inherit;",
                            'data-start' => "1000",
                            'data-splitin' => "none",
                            'data-splitout' => "none",
                            'data-responsive_offset' => "on",
                            'style' => "z-index: 5; white-space: nowrap; font-weight:400;",
                        ],
                        [
                            'class' => "tp-caption tp-resizeme text-uppercase text-center font-playfair text-white",
                            'data-x' => "['center']",
                            'data-hoffset' => "['0']",
                            'data-y' => "['middle']",
                            'data-voffset' => "['-10']",
                            'data-fontsize' => "['72']",
                            'data-lineheight' => "['100']",
                            'data-width' => "none",
                            'data-height' => "none",
                            'data-whitespace' => "nowrap",
                            'data-transform_idle' => "o:1;s:500",
                            'data-transform_in' => "y:100;scaleX:1;scaleY:1;opacity:0;",
                            'data-transform_out' => "x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;",
                            'data-mask_in' => "x:0px;y:0px;s:inherit;e:inherit;",
                            'data-mask_out' => "x:inherit;y:inherit;s:inherit;e:inherit;",
                            'data-start' => "1000",
                            'data-splitin' => "none",
                            'data-splitout' => "none",
                            'data-responsive_offset' => "on",
                            'style' => "z-index: 5; white-space: nowrap; font-weight:700;"
                        ]
                    ],
                    [
                        [
                            'class' => "tp-caption tp-resizeme text-white text-uppercase font-playfair font-weight-400",
                            'data-x' => "['left']",
                            'data-hoffset' => "['30']",
                            'data-y' => "['middle']",
                            'data-voffset' => "['-160']",
                            'data-fontsize' => "['42']",
                            'data-lineheight' => "['78']",
                            'data-width' => "none",
                            'data-height' => "none",
                            'data-whitespace' => "nowrap",
                            'data-transform_idle' => "o:1;s:500",
                            'data-transform_in' => "y:100;scaleX:1;scaleY:1;opacity:0;",
                            'data-transform_out' => "x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;",
                            'data-mask_in' => "x:0px;y:0px;s:inherit;e:inherit;",
                            'data-mask_out' => "x:inherit;y:inherit;s:inherit;e:inherit;",
                            'data-start' => "1000",
                            'data-splitin' => "none",
                            'data-splitout' => "none",
                            'data-responsive_offset' => "on",
                            'style' => "z-index: 5; white-space: nowrap; font-weight:700;"
                        ],
                        [
                            'class' => "tp-caption tp-resizeme text-uppercase font-playfair text-theme-colored font-weight-600 m-0",
                            'data-x' => "['left']",
                            'data-hoffset' => "['30']",
                            'data-y' => "['middle']",
                            'data-voffset' => "['-80']",
                            'data-fontsize' => "['100']",
                            'data-lineheight' => "['114']",
                            'data-width' => "none",
                            'data-height' => "none",
                            'data-whitespace' => "nowrap",
                            'data-transform_idle' => "o:1;s:500",
                            'data-transform_in' => "y:100;scaleX:1;scaleY:1;opacity:0;",
                            'data-transform_out' => "x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;",
                            'data-mask_in' => "x:0px;y:0px;s:inherit;e:inherit;",
                            'data-mask_out' => "x:inherit;y:inherit;s:inherit;e:inherit;",
                            'data-start' => "1000",
                            'data-splitin' => "none",
                            'data-splitout' => "none",
                            'data-responsive_offset' => "on",
                            'style' => "z-index: 5; white-space: nowrap; font-weight:700;"
                        ],
                    ]
                ]
            ]
        ],
        'heliotrope_homepage_slider_opening_background' => [
            'scope' => 'specified',
            'title' => 'Image du bandeau du haut (Header)',
            'name' => 'background_opening_hours',
            'type' => 'media',
            'position' => 1,
            'parent' => null,
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-heliotrope-home-slider' => '/src/Themes/Heliotrope/Resources/public/img/about/2.jpg'
            ]
        ],
        'heliotrope_homepage_slider_about_us' => [
            'scope' => 'specified',
            'title' => 'Article',
            'name' => 'homepage_about_us',
            'type' => 'post',
            'position' => 2,
            'parent' => null,
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [
                'categories' => []
            ],
            'content' => ['page@society-heliotrope-home-slider' => 'heliotrope-about-us']
        ],
        'heliotrope_homepage_slider_partners_background' => [
            'scope' => 'specified',
            'title' => 'Image de fond pour les partenaires',
            'name' => 'partners_background',
            'type' => 'media',
            'position' => 3,
            'parent' => null,
            'cf' => 'Heliotrope Home Page Slider',
            'data' => [
                'media_render_type' => 'object'
            ],
            'content' => [
                'page@society-heliotrope-home-slider' => '/src/Themes/Heliotrope/Resources/public/img/bg/bg3.jpg'
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
                'rows@page@society-heliotrope-gallery' => [0, 1, 2]
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
                'page@society-heliotrope-gallery' => ['Branding', 'Design', 'Photography']
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
                'rows@page@society-heliotrope-gallery' => [0, 1, 2, 3, 4, 5, 6]
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
            'content' => ['page@society-heliotrope-gallery' => ['Photography', 'Branding', 'Design', 'Branding', 'Photography', 'Design', 'Branding']
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