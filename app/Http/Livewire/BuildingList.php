<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Leshak;
use App\Models\Building;


class BuildingList extends Component
{
    protected $buildings;
    protected $leshaks;
    protected $value;
    public $selectedValue;
//    public function getStaff($buildingId){

//    }
    public function updatedSelectedValue($value){
        
        
        $this->value = $value;
    }

    public function render(){
        $leshaks = Leshak::where('building_id', $this->value)->get();
        $buildings = Building::all();
        return view('livewire.building-list',['buildings'=>$buildings,
                                                'leshaks'=>$leshaks]);
    }
}
