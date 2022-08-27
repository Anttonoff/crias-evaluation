<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'slug',
        'heart_rate',
        'blood_rate',
        'breathing_rate',
        'temperature',
        'is_healthy'
    ];

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'calf_id'
    ];

    /**
     * Relación con la cría.
     */
    public function calf()
    {
        return $this->belongsTo(Calf::class);
    }
}
