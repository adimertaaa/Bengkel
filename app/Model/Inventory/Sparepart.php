<?php

namespace App\Model\Inventory;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = "tb_inventory_master_sparepart";

    protected $primaryKey = 'id_sparepart';

    protected $fillable = [
        'id_merk',
        'id_jenis_sparepart',
        'id_konversi',
        'id_rak',
        'kode_sparepart',
        'nama_sparepart',
        'keterangan',
        'stock',
        'stock_min'
    ];

    protected $hidden =[ 
    
    ];

    public $timestamps = false;

    public function Jenissparepart(){
        return $this->belongsTo(Jenissparepart::class,'id_jenis_sparepart','id_jenis_sparepart');
    }

    public function Merksparepart(){
        return $this->belongsTo(Merksparepart::class,'id_merk','id_merk');
    }

    public function Konversi(){
        return $this->belongsTo(Konversi::class,'id_konversi','id_konversi');
    }

    public function Rak(){
        return $this->belongsTo(Rak::class,'id_rak','id_rak');
    }

    public function Gallery(){
        return $this->hasMany(Gallery::class,'id_sparepart');
    }

    public function Hargasparepart(){
        return $this->belongsTo(Hargasparepart::class,'id_sparepart','id_sparepart');
    }

}
