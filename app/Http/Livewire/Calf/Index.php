<?php

namespace App\Http\Livewire\Calf;

use App\Models\Calf;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.calf.index', [
            'calves' => Calf::with(['meatClassification', 'barnyard'])->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
