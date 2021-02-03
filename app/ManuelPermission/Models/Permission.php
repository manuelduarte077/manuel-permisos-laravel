<?php

namespace App\ManuelPermission\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    // es: desde aquí
    // en: from here
    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public function roles () {
        return $this->belongsToMany('App\ManuelPermission\Models\Role')->withTimesTamps();
    }

}
