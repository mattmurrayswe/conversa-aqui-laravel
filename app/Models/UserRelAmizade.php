<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class UserRelAmizade extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'users_rel_amizade';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cellphone',
        'data_nascimento',
        'you_are_gender',
        'you_look_for_gender',
        'you_look_for_gender_friend',
        'avoid_same_gender_relation', // Alteração feita aqui
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // Se o atributo 'no_man' estiver sendo convertido para datetime, atualize-o aqui também.
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
