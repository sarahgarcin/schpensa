<?php

Kirby::plugin('sarahgarcin/endrecipe', [



    'tags' => [
        'endrecipe' => [
            'html' => function ($tag) {
                return '</div>';
            }
        ]
    ]
]);

