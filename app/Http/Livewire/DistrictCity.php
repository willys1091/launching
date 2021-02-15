<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\city;

class DistrictCity extends Component{
    public $action,$datacity,$data,$province,$citys,$dropdown,$count,$hidden;
    public $highlightIndex = 0;

    protected $listeners = ['province'];

    public function mount($action,$datacity){
        $this->citys = $action=='edit'?  city::where('id',$datacity)->value('name') :'';
        $this->province = $action=='edit'?  city::where('id',$datacity)->value('province_id') :'';
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
        $this->citys = $this->data[$val]['name'];
        $this->hidden = "<input type='hidden' name='cityid' value='".city::where('name',$this->citys)->value('id')."'>";
        $this->dropdown = 0;
    }

    public function province($id){
        $this->dispatchBrowserEvent('getprovince',['name'=>$id]);
    }

    public function updatedCitys(){
        $this->count = city::where('province_id',$this->province)->where('name', 'like', '%' . $this->citys . '%')->count();
        $this->data = city::where('province_id',$this->province)->where('name', 'like', '%' . $this->citys . '%')->get()->toArray();
        $this->dropdown = $this->count>0 ? 1 : 0;
    }

    public function render(){
        return view('livewire.district-city');
    }
}
