<?php

class homepagecontroller extends http\controller
{
    public static function show()
    {
        $templateData['site_name'] = 'WSD Project 2';
        self::getTemplate('homepage', $templateData);
    }
    public static function create()
    {

        print_r($_POST);
    }
}
?>