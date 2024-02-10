<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChessPlayer extends Model
{
    use HasFactory;

    protected $table = 'chess_players';

    protected $fillable = [
        'name',
        'surname',
        'picture',
        'gender',
    ];

    public $timestamps = false; 

}
