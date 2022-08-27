<?php

namespace App\Http\Livewire\SickCalf;

use App\Models\Barnyard;
use App\Models\Calf;
use App\Models\SickCalfLog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $slug;
    public $calf;
    public $barnyard;
    public $diet;
    public $treatment;

    protected $rules = [
        'barnyard' => 'required|numeric',
        'diet' => 'required',
        'treatment' => 'required'
    ];

    protected $validationAttributes = [
        'barnyard' => 'corral',
        'diet' => 'dieta',
        'treatment' => 'tratamiento'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->calf = Calf::where('slug', $this->slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.sick-calf.create', [
            'barnyards' => Barnyard::where('barnyard_type_id', 2)->get()
        ]);
    }


    public function registerQuarantine()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $sensorLog = new SickCalfLog();
            $sensorLog->diet = $this->diet;
            $sensorLog->treatment = $this->treatment;
            $sensorLog->calf_id = $this->calf->id;
            $sensorLog->barnyard_id = $this->barnyard;
            $sensorLog->save();

            DB::commit();

            return redirect()->route('sick.calf.index')->with('success', 'Registro exitoso');
        } catch (\Throwable $th) {
            $this->emit('error');
            DB::rollBack();
        }
    }
}
