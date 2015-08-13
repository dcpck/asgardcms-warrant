<?php namespace Modules\Warrant\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use Translatable;

    protected $table = 'warrant__types';
    public $translatedAttributes = ['name', 'slug'];
    protected $fillable = ['name', 'slug'];
}
