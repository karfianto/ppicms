<?php namespace Modules\Stuff\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $table = 'stuff__categories';
    public $translatedAttributes = [];
    protected $fillable = [];
}
