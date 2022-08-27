<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SickCalfLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'slug',
        'diet',
        'treatment'
    ];

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'calf_id',
        'barnyard_id'
    ];

    /**
     * Relación con la cría.
     */
    public function calf()
    {
        return $this->belongsTo(Calf::class);
    }

    /**
     * Relación con el corral.
     */
    public function barnyard()
    {
        return $this->belongsTo(Barnyard::class);
    }
}
