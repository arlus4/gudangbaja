<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukStok extends Model
{
    use HasFactory;

    //fungsi eager loading laravel
    protected $with = ['kasirs', 'produk_hargas'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //pakai third-library EloquentSluggable
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'kode'
            ]
        ];
    }

    public function kasirs()
    {
        return $this->belongsTo(Kasir::class, 'kasir_id');
    }

    public function produk_hargas() //model
    {
        return $this->belongsTo(ProdukHarga::class, 'stok_id');
    }
}
