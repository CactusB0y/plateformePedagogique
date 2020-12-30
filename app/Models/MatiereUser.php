<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatiereUser extends Model
{
    use HasFactory;
    protected $table='matiere_user';
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
