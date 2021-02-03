<?php

namespace App\ManuelPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // es: desde aquí
    // en: from here
    protected $fillable = [
        'name', 'slug', 'description', 'full-access',
    ];

    public function users () {
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

}
