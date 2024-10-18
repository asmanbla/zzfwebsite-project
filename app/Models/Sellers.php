<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Gunakan User sebagai Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable; // Jika kamu menggunakan notifikasi

class Sellers extends Authenticatable // Mewarisi Authenticatable
{
    use HasFactory, Notifiable; // Trait Notifiable digunakan jika kamu mengirim notifikasi ke seller

    /**
     * Kolom yang bisa diisi secara massal.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
    ];

    /**
     * Kolom yang harus disembunyikan untuk array, misalnya saat serialisasi.
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Set password harus dienkripsi saat disimpan.
     */
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
