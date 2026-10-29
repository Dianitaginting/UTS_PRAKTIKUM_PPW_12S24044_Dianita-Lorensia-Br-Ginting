<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    protected $fillable = ['name', 'code'];

    public function equipments() {
    return $this->hasMany(Equipment::class);
}
}