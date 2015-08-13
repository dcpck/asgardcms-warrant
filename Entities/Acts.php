<?php namespace Modules\Warrant\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Acts extends Model
{
    use Translatable;

    protected $table = 'warrant__acts';
    public $translatedAttributes = ['name', 'slug'];
    protected $fillable = ['name', 'slug'];
}
