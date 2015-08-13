<?php namespace Modules\Warrant\Entities;

use Illuminate\Database\Eloquent\Model;

class ActsTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'slug'];
    protected $table = 'warrant__acts_translations';
}
