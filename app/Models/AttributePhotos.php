<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributePhotos extends Model
{
    use HasFactory;
    protected $table = 'attribute_photos';
    protected $guarded = ['id'];

}
