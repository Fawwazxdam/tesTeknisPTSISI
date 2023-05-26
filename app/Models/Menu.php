<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $guarded = ['id'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function menu_user()
    {
        return $this->hasMany(MenuUser::class);
    }
}
