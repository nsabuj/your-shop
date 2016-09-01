<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'articles';
    protected $fillable = array(
        'title',
        'description'
    );
}
