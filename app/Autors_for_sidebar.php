<?php


namespace App;


class Autors_for_sidebar
{
    public function show_autors()
    {
        foreach (Autor::limit (10)->get(['first_name', 'last_name', 'key']) as $autors) {

            echo '<a href=" '. route('books_by_autor' , $autors->key) . '">'. $autors->first_name  .
                $autors->last_name . '</a> <br>';
        }
    }
}