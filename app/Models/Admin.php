<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'confirmSenha',
    ];

    protected $hidden = [
        'senha',
        'confirmSenha',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
