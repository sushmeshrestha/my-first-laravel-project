<?php
/**
 * Created by PhpStorm.
 * User: sushmee
 * Date: 12/28/18
 * Time: 10:48 AM
 */

    use Faker\Generator as Faker;

    $projects->define(App\Post::class, function (project $projects){
        return[
            'title' => $projects->sentence,
            'content'=> $projects ->paragraph(6)
        ];
    });
