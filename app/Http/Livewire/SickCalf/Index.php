<?php

namespace App\Http\Livewire\SickCalf;

use App\Models\Calf;
use App\Models\SensorLog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $sensors = SensorLog::all()->pluck('calf_id')->unique();

        return view('livewire.sick-calf.index', [
            'calves' => Calf::doesntHave('treatments')->whereIntegerInRaw('id', $sensors)->paginate(10)
        ]);
    }
}
