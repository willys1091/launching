<div class="row" x-data="{ province: @entangle('province') }" >
    <span @getprovince.window="province = $event.detail.name" x-model="province"></span>
    <div class="col-lg-12">
        <div class="form-group">
            <label for="city">City <span class="text-danger">*</span></label>
            <input type="text" wire:model="citys"
            wire:keydown.arrow-down="incrementHighlight" wire:keydown.arrow-up="decrementHighlight" wire:keydown.enter="select('{{$highlightIndex}}')"
            class="form-control" autocomplete="off"  name="city" placeholder="name of the City">
            {!!$hidden!!}
            @if($dropdown==1)
            <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
                <ul class="list-group push">
                    @foreach($data as $i=>$d)
                        <li class="list-group-item  d-flex justify-content-between align-items-center list-group-item-action {{$highlightIndex == $i ? 'active':''}}" wire:click="select('{{$i}}')">{{$d['name']}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </div>
</div>
