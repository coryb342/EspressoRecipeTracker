<?php

namespace App\Models;

use App\Events\RecipeCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'created' => RecipeCreated::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'brand',
        'blend',
        'roast',
        'dose',
        'yield',
        'grindsize',
        'notes',
    ];
}
