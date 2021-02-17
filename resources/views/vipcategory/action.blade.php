<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
        </div>
    </div>
    @if($action=='add')
        <form action="{{url('vipcategory')}}" method="post" onsubmit="submit.disabled = true; return true;">
    @else
        <form action="{{url('vipcategory/'.$data->id)}}" method="post"> @method('patch')
    @endif @csrf
        <div class="block-content font-size-sm">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="Name">Event <span class="text-danger">*</span></label>
                    <select class="js-select2 form-control" name="eventid" style="width: 100%;" data-placeholder="Choose one..">
                        <option></option>
                        @foreach($event as $e)
                            <option value="{{$e->id}}" {{$action=='edit'? $e->id==$data->event_id?'selected':'':''}}>{{$e->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label>&nbsp;</label>
                    <div class="custom-control custom-checkbox custom-control-lg mb-1">
                        <input type="checkbox" class="custom-control-input" id="refunable" name="refundable" {{$action=='edit'?$data->refundable=='1'?'checked':'':''}}>
                        <label class="custom-control-label" for="refunable"><b>Refunable</b></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">  
                    <label for="Name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$action=='edit'?$data->name:''}}" required>
                </div>
                <div class="form-group col-lg-6">  
                    <label for="Name">Qty <span class="text-danger">*</span></label>
                    <input type="text" class="form-control numonly" maxlength="2" name="qty" placeholder="Qty" value="{{$action=='edit'?$data->qty:''}}" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">  
                    <label for="Name">NUP Fee <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nupfee" placeholder="NUP Fee" value="{{$action=='edit'?$data->nupfee:''}}" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="color">Color <span class="text-danger">*</span></label>
                    <div class="js-colorpicker input-group" data-format="hex">
                        <input type="text" class="form-control" name="color" value="{{$action=='edit'?$data->color:'#5c80d1'}}" required>
                        <div class="input-group-append"><span class="input-group-text colorpicker-input-addon"><i></i></span></div>
                    </div>
                </div>
            </div>
            @if(Session('type')=='admin')
                <div class="row">
                    <div class="form-group col-lg-6">  
                        <label for="Name">Last No</label>
                        <input type="text" class="form-control" name="lastno" placeholder="last No" value="{{$action=='edit'?$data->lastno:''}}">
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="example-textarea-input">Description</label>
                    <textarea class="form-control"  name="desc" rows="4" placeholder="">{{$action=='edit'?$data->desc:''}}</textarea>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full text-right border-top">
            <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">{{$action =='add'?'Create':'save'}}</button> 
        </div>
    </form>
</div>
<script src="{{asset('public/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/js/siapfulin.js')}}"></script>
<script>
    jQuery(function () {
        Siap.helpers(['select2','colorpicker']);
    });
</script>
