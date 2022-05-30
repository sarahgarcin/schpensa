<?php

Kirby::plugin('sarahgarcin/endrow', [



    'tags' => [
        'endrow' => [
            'html' => function ($tag) {
                return '</div>';
            }
        ]
    ]
]);

