<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="name">Province<span class="text-danger">*</span></label>
            <input type="text" wire:model="provinces"
            wire:keydown.arrow-down="incrementHighlight" wire:keydown.arrow-up="decrementHighlight" wire:keydown.enter="select('{{$highlightIndex}}')"
            class="form-control" autocomplete="off"  name="province" placeholder="name of the Province">
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