<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAtribute extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attribute_photos()
    {
        return $this->hasMany(AttributePhotos::class, 'attribute_id');
    }
}
