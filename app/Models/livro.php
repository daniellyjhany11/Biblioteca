<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'id', 'autor', 'titulo', 'subtitulo', 'edicao', 'editora', 'ano_publicado'
    ];

    protected static function booted()
    {
        static::addGlobalScope('user', function ($query) {
            if (Auth::check()) {
                $query->where('user_id', Auth::id());
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
