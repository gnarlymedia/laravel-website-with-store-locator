<?php

return array(

    'providers' => array(
        'twitter' => array(
            'identifier'    => $_ENV['TWITTER_IDENTIFIER'],
            'secret'        => $_ENV['TWITTER_SECRET'],
            'callback_uri'  => $_ENV['TWITTER_CALLBACK_URI']
        )
    ),

);
