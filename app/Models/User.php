<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Sluggable;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    // protected $guard = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama',
        'username',
        'is_admin',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    //pakai third-library EloquentSluggable
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

    public function pelanggans()
    {
        return $this->hasMany(Pelanggan::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
