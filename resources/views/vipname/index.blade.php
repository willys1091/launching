@extends('template')
@section('content')
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped dt-responsive table-vcenter js-dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Status</th>
                        {!!Session('type')=='admin'?'<th>Type</th><th>Role</th>':''!!}
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $x=1 @endphp
                    @foreach($user as $u)
                    <tr>
                        <td class="text-center font-size-sm">{{$x}}</td>
                        <td class="d-sm-table-cell font-size-sm font-w600"><a href="{{url('people/'.$u->id.'/detail')}}">{{ucwords($u->name)}}</a></td>
                        <td class="d-sm-table-cell font-size-sm">{{$u->email}}</td>
                        <td class="{{$u->company_id<>''?'d-sm-table-cell font-size-sm font-w600':''}}">{!!$u->company_id <>''?'<a href="#">'.ucwords($u->company->name).'</a>':'<em class="text-muted font-size-sm">None</em>'!!}</td>
                        <td class="d-sm-table-cell font-size-sm"><span class="badge badge-{{$u->status=='trial'?'danger':'success'}}">{{ucwords($u->status)}}</span> {!!$u->expired_date<>''?'<br><em class="text-muted">'.$GeneralTrait->smartDatefuture(strtotime($u->expired_date)).'</em>':''!!}</td>
                        @if(Session('type')=='admin')
                            <td class="d-sm-table-cell font-size-sm"> <span class="badge badge-{{$u->type=='admin'?'primary':'warning'}}">{{ucwords($u->type)}}</span></td>
                            <td class="d-sm-table-cell font-size-sm font-w600">{!!$u->role_id<>''?'<a href="'.url("role").'">'.ucwords($u->role->name).'</a>':'<em class="text-muted font-size-sm">None</em>'!!}</td>
                        @endif
                        <td class="text-center">
                            <div class="btn-group">
                                @livewire('active', ['status' => $u->active,'modul'=>'user','key'=> $u->id])
                                <a onClick='showM("{{url('people/'.$u->id.'/edit')}}");return false' type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                <a href="{{url('people/'.$u->id.'/detail')}}" type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Manage"><i class="fas fa-tasks"></i></a>
                            </div>
                        </td>
                    </tr>   
                    @php $x++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section ('headerScript')
@livewireStyles
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section ('footerScript')
@livewireScripts
<script> Livewire.restart();</script>
<script src="{{asset('public/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('public/js/siapfulin.js')}}"></script>
@endsection