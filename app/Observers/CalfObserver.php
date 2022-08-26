<?php

namespace App\Observers;

use App\Http\Controllers\CalfController;
use App\Models\Calf;
use App\Models\MeatClassification;

class CalfObserver
{
    /**
     * Handle the Calf "created" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function created(Calf $calf)
    {
        //
    }

    /**
     * Handle the Calf "creating" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function creating(Calf $calf)
    {
        $meatType = CalfController::getMeatClassification($calf->weight, $calf->muscle_color, $calf->marbling);
        $meatClassification = MeatClassification::where('type', $meatType)->firstOrFail();
        $calf->meat_classification_id = $meatClassification->id;
    }

    /**
     * Handle the Calf "updated" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function updated(Calf $calf)
    {
        //
    }

    /**
     * Handle the Calf "updating" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function updating(Calf $calf)
    {
        $meatType = CalfController::getMeatClassification($calf->weight, $calf->muscle_color, $calf->marbling);
        $meatClassification = MeatClassification::where('type', $meatType)->firstOrFail();
        $calf->meat_classification_id = $meatClassification->id;
    }

    /**
     * Handle the Calf "deleted" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function deleted(Calf $calf)
    {
        //
    }

    /**
     * Handle the Calf "restored" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function restored(Calf $calf)
    {
        //
    }

    /**
     * Handle the Calf "force deleted" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function forceDeleted(Calf $calf)
    {
        //
    }
}
