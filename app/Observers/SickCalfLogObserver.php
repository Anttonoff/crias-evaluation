<?php

namespace App\Observers;

use App\Models\Calf;
use Illuminate\Support\Str;
use App\Models\SickCalfLog;

class SickCalfLogObserver
{
    /**
     * Handle the SickCalfLog "created" event.
     *
     * @param  \App\Models\SickCalfLog  $sickCalfLog
     * @return void
     */
    public function created(SickCalfLog $sickCalfLog)
    {
        //
    }

    /**
     * Handle the SickCalfLog "creating" event.
     *
     * @param  \App\Models\Calf  $calf
     * @return void
     */
    public function creating(SickCalfLog $sickCalfLog)
    {
        $sickCalfLog->slug = Str::random(10);
        $calf = Calf::findOrFail($sickCalfLog->calf_id);
        $calf->barnyard_id = $sickCalfLog->barnyard_id;
        $calf->is_in_quarantine = true;
        $calf->update();
    }

    /**
     * Handle the SickCalfLog "updated" event.
     *
     * @param  \App\Models\SickCalfLog  $sickCalfLog
     * @return void
     */
    public function updated(SickCalfLog $sickCalfLog)
    {
        //
    }

    /**
     * Handle the SickCalfLog "deleted" event.
     *
     * @param  \App\Models\SickCalfLog  $sickCalfLog
     * @return void
     */
    public function deleted(SickCalfLog $sickCalfLog)
    {
        //
    }

    /**
     * Handle the SickCalfLog "restored" event.
     *
     * @param  \App\Models\SickCalfLog  $sickCalfLog
     * @return void
     */
    public function restored(SickCalfLog $sickCalfLog)
    {
        //
    }

    /**
     * Handle the SickCalfLog "force deleted" event.
     *
     * @param  \App\Models\SickCalfLog  $sickCalfLog
     * @return void
     */
    public function forceDeleted(SickCalfLog $sickCalfLog)
    {
        //
    }
}
