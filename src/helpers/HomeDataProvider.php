<?php

namespace Helpers;

class HomeDataProvider
{
    /**
     * Get data to banner section
     *
     * @return array
     */
    static function sectionBanner()
    {
        return [
            'features' => [
                [
                    'icon' => 'router',
                    'text' => 'Roteador Dual Band'
                ],
                [
                    'icon' => 'speed',
                    'text' => 'Alta Velocidade e Baixa Latência'
                ],
                [
                    'icon' => 'wifi_tethering',
                    'text' => 'Via Fibra Ou Rádio'
                ]
            ],
            'headline' => 'Assista, navegue e jogue ao mesmo tempo!',
            'subheadline' => 'É isso mesmo! Nossa internet via fibra possui alta estabilidade e baixa latência, permitindo que você faça <span class="text-primary-1">tudo ao mesmo tempo</span>!'
        ];
    }

    /**
     * Get data to features section
     *
     * @return array
     */
    static function sectionFeatures()
    {
        return [
            [
                'icon' => 'apps',
                'title' => 'Consetur adipicing',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, veniam.',
            ],
            [
                'icon' => 'wifi',
                'title' => 'Consetur adipicing',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, veniam.',
            ],
            [
                'icon' => 'support_agent',
                'title' => 'Consetur adipising',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, veniam.',
            ]
        ];
    }

    /**
     * Get data to plans section
     *
     * @return array
     */
    static function sectionPlans()
    {
        return [
            'title' => 'Planos',
            'subtitle' => 'Confira todos os nossos planos',
            'plans' => [
                [
                    'title' => '50 MEGAS',
                    'features' => [
                        'Download: 6,25 MB/s',
                        'Upload: 6,25 MB/s',
                        'Instalação grátis',
                        'Roteador grátis*',
                    ]
                ],
                [
                    'title' => '75 MEGAS',
                    'features' => [
                        'Download: 12,25 MB/s',
                        'Upload: 12,25 MB/s',
                        'Instalação grátis',
                        'Roteador grátis*',
                    ]
                ],
                [
                    'title' => '125 MEGAS',
                    'features' => [
                        'Download: 16,25 MB/s',
                        'Upload: 16,25 MB/s',
                        'Instalação grátis',
                        'Roteador grátis*',
                    ]
                ]
            ]
        ];
    }

    /**
     * Get data to testmonials section
     *
     * @return array
     */
    static function sectionTestmonials()
    {
        return [
            'title' => 'Clientes',
            'subtitle' => 'Vejam o que alguns de nossos clientes dizem',
            'testmonials' => [
                [
                    'client_name' => 'Client Name',
                    'title' => 'Lorem ipsum dolor',
                    'testmonial' => 'Lorem ipsum dolor, natus dolor sitin datus. Only nutis uistu loken nadis ilastu unranin ila nanad uiqui.',
                    'avatar' => \Helpers\Url::asset('img/client-thumb.png')
                ],
                [
                    'client_name' => 'Client Name',
                    'title' => 'Lorem ipsum dolor',
                    'testmonial' => 'Lorem ipsum dolor, natus dolor sitin datus. Only nutis uistu loken nadis ilastu unranin ila nanad uiqui.',
                    'avatar' => \Helpers\Url::asset('img/client-thumb.png')
                ],
                [
                    'client_name' => 'Client Name',
                    'title' => 'Lorem ipsum dolor',
                    'testmonial' => 'Lorem ipsum dolor, natus dolor sitin datus. Only nutis uistu loken nadis ilastu unranin ila nanad uiqui.',
                    'avatar' => \Helpers\Url::asset('img/client-thumb.png')
                ],
                [
                    'client_name' => 'Client Name',
                    'title' => 'Lorem ipsum dolor',
                    'testmonial' => 'Lorem ipsum dolor, natus dolor sitin datus. Only nutis uistu loken nadis ilastu unranin ila nanad uiqui.',
                    'avatar' => \Helpers\Url::asset('img/client-thumb.png')
                ]
            ]
        ];
    }

    /**
     * Get data to contact and location section
     *
     * @return array
     */
    static function sectionLocationAndContact()
    {
        return array_merge(
            \Helpers\ThemeDataProvider::address(),
            ['contacts' => \Helpers\ThemeDataProvider::contacts()]
        );
    }
}