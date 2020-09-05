<?php

return [
    'description' => 'услуги аренды спецтехники и общего строительства и благоустройства',
    'keywords' => 'спецтехника, аренда, строительство, экскаватор, самосвал, погрузчик, кран, бульдозер, воровайка, каток, услуги',
    'phone' => '+7 (923) 374 7491',
    'phone_2' => '+7 (923) 374 7491',
    'email' => 'asilva002@mail.ru',
    'email_2' => 'alikgrup@mail.ru',
    'address' => 'г. Красноярск, ул. Грунтовая, д. 19А, офис 28',
    'instagram' => 'https://instagram.com',
    //TODO: make through database and component
    'machines' => [
        [
            'name' => 'Экскаваторы',
            'code' => 'excavators',
        ],
        [
            'name' => 'Краны',
            'code' => 'cranes',
        ],
        [
            'name' => 'Самосвалы',
            'code' => 'dumps',
        ],
        [
            'name' => 'Погрузчики',
            'code' => 'loaders',
        ],
        [
            'name' => 'Экскаватор-погрузчики',
            'code' => 'excavators_loaders',
        ],
        [
            'name' => 'Бульдозеры',
            'code' => 'bulldozers',
        ],
        [
            'name' => 'Воровайки',
            'code' => 'trucks',
        ],
        [
            'name' => 'Катки',
            'code' => 'rolls',
        ],
    ],
];
