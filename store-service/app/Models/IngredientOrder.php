<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate_id',
        'status'
    ];

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class)->withPivot('requested_quantity', 'recieved_quantity');
    }
}
