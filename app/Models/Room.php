<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'hotel_id',
        'net_price',
        'tax_price',
        'tax_type',
        'tax_currency',
        'total_price',
    ];

    protected $dates = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    // Relationships
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
