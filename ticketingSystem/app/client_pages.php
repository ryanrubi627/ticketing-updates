<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client_pages extends Model
{
    protected $table = 'client_pages';
    protected $fillable = ['title', 'description', 'importance'];
}
