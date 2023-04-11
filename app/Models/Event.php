<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    //Um evento pertence a um usuário (1-N)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Um evento pertence há muitos participantes/users (N-N)
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
