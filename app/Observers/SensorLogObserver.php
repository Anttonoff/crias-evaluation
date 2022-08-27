<?php

namespace App\Observers;

use App\Http\Controllers\CalfController;
use Illuminate\Support\Str;
use App\Models\SensorLog;

class SensorLogObserver
{
    /**
     * Handle the SensorLog "created" event.
     *
     * @param  \App\Models\SensorLog  $sensorLog
     * @return void
     */
    public function created(SensorLog $sensorLog)
    {
        //
    }

    /**
     * Handle the SensorLog "creating" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function creating(SensorLog $sensorLog)
    {
        $sensorLog->slug = Str::random(10);
        $sensorLog->is_healthy = CalfController::isCalfHealthy($sensorLog->temperature, $sensorLog->heart_rate, $sensorLog->breathing_rate, $sensorLog->blood_rate);
        ;
    }

    /**
     * Handle the SensorLog "updated" event.
     *
     * @param  \App\Models\SensorLog  $sensorLog
     * @return void
     */
    public function updated(SensorLog $sensorLog)
    {
        //
    }

    /**
     * Handle the SensorLog "deleted" event.
     *
     * @param  \App\Models\SensorLog  $sensorLog
     * @return void
     */
    public function deleted(SensorLog $sensorLog)
    {
        //
    }

    /**
     * Handle the SensorLog "restored" event.
     *
     * @param  \App\Models\SensorLog  $sensorLog
     * @return void
     */
    public function restored(SensorLog $sensorLog)
    {
        //
    }

    /**
     * Handle the SensorLog "force deleted" event.
     *
     * @param  \App\Models\SensorLog  $sensorLog
     * @return void
     */
    public function forceDeleted(SensorLog $sensorLog)
    {
        //
    }
}
