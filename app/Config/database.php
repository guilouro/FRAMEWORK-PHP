<?php

class DATABASE_CONFIG
{

    # local database
    public static $staging = array(
        'host' => 'localhost',
        'login' => 'root',
        'senha' => 'poi123',
        'banco' => 'teste',
    );


    # production database
    public static $production = array(
        'host' => 'localhost',
        'login' => 'root',
        'senha' => '',
        'banco' => 'teste',
    );
}