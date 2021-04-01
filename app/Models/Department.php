<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lead_id'];

    public function lead()
    {
        return $this->belongsTo(User::class, 'lead_id');
    }
}
