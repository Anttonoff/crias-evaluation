<?php

namespace App\Http\Livewire\SensorLog;

use App\Models\Calf;
use App\Models\SensorLog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $calf;
    public $heart;
    public $breathing;
    public $blood;
    public $temperature;

    protected $rules = [
        'calf' => 'required|numeric',
        'heart' => 'required|numeric',
        'breathing' => 'required|numeric',
        'blood' => 'required|numeric',
        'temperature' => 'required|numeric'
    ];

    protected $validationAttributes = [
        'calf' => 'cría',
        'heart' => 'frecuencia cardiaca',
        'breathing' => 'frecuencia respiratoria',
        'blood' => 'frecuencia sanguínea',
        'temperature' => 'temperatura'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.sensor-log.create', [
            'calves' => Calf::doesntHave('treatments')->where('meat_classification_id', 2)->orderBy('name')->get(),
        ]);
    }

    public function registerSensorLog()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $sensorLog = new SensorLog();
            $sensorLog->heart_rate = $this->heart;
            $sensorLog->blood_rate = $this->blood;
            $sensorLog->breathing_rate = $this->breathing;
            $sensorLog->temperature = $this->temperature;
            $sensorLog->calf_id = $this->calf;

            $sensorLog->save();

            $this->reset();
            $this->emit('saved');
            DB::commit();
        } catch (\Throwable $th) {
            $this->emit('error');
            DB::rollBack();
        }
    }
}
