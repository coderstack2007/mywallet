<?php

namespace App\Models;

use Illuminate\DataEbase\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
}
protected $fillable = [
    'job',
    'user_id',

];
public function users() 
{
    return $this->belongsTo(User::class);
}