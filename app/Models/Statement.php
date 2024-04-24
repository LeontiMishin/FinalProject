<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullName',
        'regNumber',
        'signature',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'statement';
}
