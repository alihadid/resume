<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslation;

class Usercom extends Model
{
	//use HasTranslations;
	//public $translatable = ['name'];
    protected $table ='company';
    public $timestamps = false;
    
}
