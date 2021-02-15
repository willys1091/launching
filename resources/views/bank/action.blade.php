<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times"></i></button>
        </div>
    </div>
    @if($action=='add')
    <form action="{{url('bank')}}" method="post" onsubmit="submit.disabled = true; return true;">
        @else
        <form action="{{url('bank/'.$data->id)}}" method="post"> @method('patch')
    @endif @csrf
        <div class="block-content font-size-sm">
            <div class="row">
                <div class="col-lg-10">
                    <div class="form-group">
                        <label for="Name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$action=='edit'?$data->name:''}}" required>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="code">Code </label>
                        <input type="text" class="form-control numonly" name="code" placeholder="Code" maxlength="3" value="{{$action=='edit'?$data->code:''}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="Company Name">Company Name</label>
                        <input type="text" class="form-control" name="companyname" placeholder="Company Name" value="{{$action=='edit'?$data->companyname:''}}">
                    </div>
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
<script src="{{asset('public/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('public/js/siapfulin.js')}}"></script>
