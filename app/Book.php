<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   public function autors () {
       return $this->belongsToMany(Autor::class);
   }

    public function headings () {
        return $this->belongsToMany(Heading::class);
    }
}
