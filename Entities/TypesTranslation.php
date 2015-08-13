<?php namespace Modules\Warrant\Entities;

use Illuminate\Database\Eloquent\Model;

class TypesTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'slug'];
    protected $table = 'warrant__types_translations';
}
