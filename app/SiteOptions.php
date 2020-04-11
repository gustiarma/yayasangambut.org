<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteOptions extends Model
{
    protected $table = 'site_options';
    protected $fillable  = [
        'name', 'value', 'type', 'description', 'default', 'title'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
