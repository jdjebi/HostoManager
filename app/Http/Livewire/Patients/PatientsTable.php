<?php

namespace App\Http\Livewire\Patients;

use App\Models\Patient;
use Livewire\Component;

class PatientsTable extends Component
{
    public $patients;

    public function mount(){
        $this->patients = Patient::orderBy('nom')->limit(50)->get();
    }

    public function render()
    {
        return view('livewire.patients.patients-table');
    }
}
