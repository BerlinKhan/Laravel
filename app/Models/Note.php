<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

      // Ensure user_id and note are fillable
      protected $fillable = ['note', 'user_id'];
}
