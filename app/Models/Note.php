<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded=[
        'id',
    ];
    protected $hidden = [
        'updated_at',
        'created_at',
    ];
    public function inscription()
    {
        return $this->belongsTo(Inscription::class);
    }
    public function diciplines_classe()
    {
        return $this->belongsTo(DiciplinesClasse::class);
    }
}
