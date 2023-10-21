<?php

require __DIR__ . '/../bootstrap.php';

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="<?= asset('css/style.css') ?>" rel="stylesheet">

    <title>Net Fácil</title>
</head>

<body>

    <header class="min-h-[100px] border-b-2 border-primary-4 flex items-center">
        <div class="container flex">
            <a href="<?= url() ?>" title="<?= CONF_NAME ?> Página Inicial">
                <img src="<?= asset('img/logo.svg') ?>" alt="<?= CONF_NAME ?> Logo">
            </a>

            <div class="w-full flex items-center">
                <nav class="text-primary-1 font-medium ml-auto hidden xl:inline-flex">
                    <?php

                    $navigations = [
                        [
                            'text' => 'Início',
                            'href' => url(),
                            'title' => 'Início'
                        ],
                        [
                            'text' => 'Nossos planos',
                            'href' => '#planos',
                            'title' => 'Nossos planos'
                        ],
                        [
                            'text' => 'Entrar em contato',
                            'href' => '#contato',
                            'title' => 'Entrar em contato'
                        ],
                        [
                            'text' => 'Sobre nós',
                            'href' => '#sobre-nos',
                            'title' => 'Sobre nós'
                        ]
                    ];

                    foreach ($navigations as $nav):
                        $nav = (object) $nav;
                        ?>
                        <a class="px-6 py-3 hover:text-primary-4 duration-300" href="<?= $nav->href ?>"
                            target="<?= $nav->target ?? '_self' ?>" title="<?= $nav->title ?? $nav->text ?>">
                            <?= $nav->text ?>
                        </a>
                        <?php
                    endforeach;
                    ?>
                </nav>

                <!-- button -->
                <?php
                render_component('button', [
                    'style' => 'ml-auto xl:ml-10',
                    'size' => 'base',
                    'text' => 'Eu quero internet',
                    'href' => 'https://api.whatsapp.com/send?phone=' . CONF_WHATSAPP_NUMBER,
                    'prependIcon' => asset('icon/whatsapp-white.svg'),
                    'target' => '_blank'
                ]);
                ?>
            </div>
        </div>
    </header>