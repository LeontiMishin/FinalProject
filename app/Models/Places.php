<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'free',
        'occupied',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'places';
}
