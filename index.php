<?php

load([
    'TreeBuilder' => 'src/TreeBuilder.php'
], __DIR__);

Kirby::plugin('texnixe/k3-treebuilder', [
    'hooks' => [
        'page.create:after' => function ($page) {
            TreeBuilder::buildTree($page);
        }
    ],
]);