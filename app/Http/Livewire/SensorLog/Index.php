<?php

namespace App\Http\Livewire\SensorLog;

use App\Models\Calf;
use App\Models\SensorLog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.sensor-log.index', [
            'sensorLogs' => SensorLog::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
