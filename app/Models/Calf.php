<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calf extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'slug',
        'date',
        'weight',
        'muscle_color',
        'marbling',
        'cost',
        'name',
        'description',
        'is_in_quarantine'
    ];

    /**
     * The attributes that are guarded.
     *
     * @var string[]
     */
    protected $guarded = [
        'provider_id',
        'meat_classification_id',
        'barnyard_id'
    ];

    /**
     * Relación con clasificación de carne.
     */
    public function meatClassification()
    {
        return $this->belongsTo(MeatClassification::class);
    }

    /**
     * Relación con corral de la cría.
     */
    public function barnyard()
    {
        return $this->belongsTo(Barnyard::class);
    }

    /**
     * Relación con proveedor.
     */
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    /**
     * Relación a tratamiento por cuarentena.
     */
    public function treatments()
    {
        return $this->hasMany(SickCalfLog::class);
    }
}
