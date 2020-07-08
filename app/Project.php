<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects'; // Optional in this case because the class name is taken and converted in plural and lowercase
}
