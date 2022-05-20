<?php

Kirby::plugin('sarahgarcin/recipe', [



    'tags' => [
        'recipe' => [
            'html' => function ($tag) {
                return '<div class="recipe">';
            }
        ]
    ]
]);

