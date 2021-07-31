<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertiserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertiser_id',
        'data',
        'synced_at',
    ];
}
