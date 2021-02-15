<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\province;
use App\Models\city;

class DistrictProvince extends Component{
    public $action,$datacity,$provinces,$data,$dropdown,$count;
    public $highlightIndex = 0;
    
    public function mount($action,$datacity){
        $this->provinces = $action=='edit'?  province::where('id',city::where('id',$datacity)->value('province_id'))->value('name') :'';

        $this->dropdown = 0;
    }

    public function incrementHighlight(){
        if ($this->highlightIndex === count($this->data) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight(){
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->data) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function select($val){
        $this->provinces = $this->data[$val]['name'];
        $this->emit("province",province::where('name',$this->data[$val]['name'])->value('id'));
        $this->dropdown = 0;
    }

    public function updatedProvinces(){
        $this->count = province::where('name', 'like', '%' . $this->provinces . '%')->count();
        $this->data = province::where('name', 'like', '%' . $this->provinces . '%')->get()->toArray();
        $this->dropdown = $this->count>0 ? 1 : 0;
       
    }

    public function render(){
        return view('livewire.district-province');
    }
}
