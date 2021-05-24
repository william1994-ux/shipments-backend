<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waybill extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'from',
        'shipment_id',
        'to',
        'price'
    ];

    public function shipment () {
        return $this->belongsTo(Shipment::class); 
    }
}
