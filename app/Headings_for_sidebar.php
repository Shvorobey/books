<?php


namespace App;


class Headings_for_sidebar
{
    public function show_headings()
    {
        foreach (Heading::distinct()->get(['title', 'key']) as $heading) {

            echo '<a href=" ' . route('books_by_heading', $heading->key) . '">' . $heading->title . '</a> <br>';
        }
    }
}