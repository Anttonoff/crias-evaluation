<?php

namespace App\Http\Livewire\Calf;

use App\Models\Barnyard;
use App\Models\Calf;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;
    public $provider;
    public $barnyard;
    public $weigth;
    public $muscle;
    public $marbling;
    public $cost;
    public $date;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'provider' => 'required|numeric',
        'barnyard' => 'required|numeric',
        'weigth' => 'required|numeric',
        'muscle' => 'required|numeric|between:1,7',
        'marbling' => 'required|numeric|between:1,5',
        'cost' => 'required|numeric',
        'date' => 'required|date'
    ];

    protected $validationAttributes = [
        'name' => 'nombre',
        'description' => 'descripción',
        'provider' => 'proveedor',
        'barnyard' => 'corral',
        'weigth' => 'peso',
        'muscle' => 'color musculo',
        'marbling' => 'marmoleo',
        'cost' => 'costo',
        'date' => 'fecha'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.calf.create', [
            'providers' => Provider::all(),
            'barnyards' => Barnyard::all(),
        ]);
    }

    public function registerCalf()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $calf = new Calf();
            $calf->name = $this->name;
            $calf->description = $this->description;
            $calf->muscle_color = $this->muscle;
            $calf->marbling = $this->marbling;
            $calf->weight = $this->weigth;
            $calf->cost = $this->cost;
            $calf->date = $this->date;
            $calf->provider_id = $this->provider;
            $calf->barnyard_id = $this->barnyard;

            $calf->save();

            $this->reset();
            $this->emit('saved');
            DB::commit();
        } catch (\Throwable $th) {
            $this->emit('error');
            DB::rollBack();
        }
    }
}
