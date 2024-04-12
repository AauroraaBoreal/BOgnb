<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Employee extends Model
{
    use HasFactory;

    protected function name(): Attribute{
        return new Attribute(
            get: function($value){
                return ucwords($value);
            },

            set: function($value){
                return strtolower($value);
            }
        );
    }

}
