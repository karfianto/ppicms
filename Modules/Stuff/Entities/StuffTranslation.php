<?php namespace Modules\Stuff\Entities;

use Illuminate\Database\Eloquent\Model;

class StuffTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'stuff__stuff_translations';
}
