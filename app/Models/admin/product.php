<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = "product";

    protected $id = "id";

    protected $fillable = ['image', 'name', 'size', 'category_id', 'description', 'price', 'discount'];
}
