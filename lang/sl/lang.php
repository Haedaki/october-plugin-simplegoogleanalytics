<?php

    return [

        'plugin' => [
            'name'        => 'Simple Google Analytics',
            'description' => 'Doda Google Analytics kodo na spletno stran'
        ],

        'components' => [
            'simplegoogleanalytics' => [
                'name'               => 'Google Analytics koda',
                'description'        => 'Dodaj Google Analytics kodo na stran',
                'track_id'           => 'Tracking ID',
                'track_id_desc'      => 'Google Analytics Tracking ID',
                'domain'             => 'Nastavi domeno po meri',
                'domain_desc'        => 'Nastavi domeno za spremljanje',
                'production'         => 'Samo za produkcijsko okolje',
                'production_desc'    => 'Vstavi Analytics kodo samo na produkcijsko okolje',
                'anonymize_ip_title' => 'Anonimiziraj IP',
                'anonymize_ip_desc'  => 'Skrij določene dele IP naslovov uporabnikov'
            ]
        ]

    ];

?>