<?php namespace Modules\Stuff\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use Translatable;

    protected $table = 'stuff__stuffs';
    public $translatedAttributes = [];
    protected $fillable = [];
}
