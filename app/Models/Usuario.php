<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    protected function name() : Attribute{
        return new Attribute(

            get: fn($value) => ucwords($value),

            set: function($value){
                return strtolower($value);
            }
        );
    }

}
