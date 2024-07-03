<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'date_of_birth'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
