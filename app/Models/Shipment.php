<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $guarded = []; 

    protected $fillable = [
        'name',
        'user_id',
        'address',
        'phone'
    ];

    public function waybill () {
        return $this->hasOne(Waybill::class);
    }

    public function user () {
        return $this->belongsTo(User::class); 
    }
}
