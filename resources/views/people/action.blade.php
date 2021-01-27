<div class="block block-rounded block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">{{$title}}</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-fw fa-times"></i>
            </button>
        </div>
    </div>
    @if($action=='add')
    <form action="{{url('people')}}" method="post" onsubmit="submit.disabled = true; return true;">
        @else
        <form action="{{url('people/'.$user->id)}}" method="post"> @method('patch')
    @endif @csrf
    <input type="hidden" class="action" value="{{$action}}"/>
    <div class="block-content font-size-sm">
        <div class="row"> 
            @livewire('people-email', ['action' => $action , 'dataemail' => $user->email ?? 0])
            @if(Session('type')=='admin')
                @livewire('people-type', ['action' => $action , 'datatype' => $user->type ?? 0])
            @endif
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="Name">Name <span class="merah">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$action=='edit'?$user->name:''}}" required>
                </div>
            </div>

            @if(Session('type')=='admin')
                @livewire('people-role', ['action' => $action , 'datarole' => $user->role_id ?? 0, 'datatype' => $user->type ?? 0])
            @endif
        </div>

        @if(Session('type')=='admin')
            <div class="row">
                @livewire('people-company', ['action' => $action , 'datacompany' => $user->company_id ?? 0, 'datatype' => $user->type ?? 0])
                @livewire('people-status', ['action' => $action , 'datastatus' => $user->status ?? 0, 'datatype' => $user->type ?? 0])
                @livewire('people-expired', ['action' => $action , 'dataexpired' => $user->expired_date ?? 0, 'datatype' => $user->type ?? 0])

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Password">Password <span class="merah">*</span></label></label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
            </div>
        @endif 
    </div>
    @livewire('people-button',['action' => $action])
    </form>
</div>
<script src="{{asset('public/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
@livewireStyles
@livewireScripts
@stack('scripts')
<script>
    Livewire.restart();
   
    jQuery(function () {
        Siap.helpers(['flatpickr', 'select2']);
    });
</script>
