<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = "admin";

    protected $primaryKey = "id";

    protected $Fillable = ['name', 'email', 'password'];
}
