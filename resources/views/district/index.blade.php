@extends('template')
@section('content')
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped dt-responsive table-vcenter js-dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>province</th>
                        <th>City</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $x=1 @endphp
                    @foreach($district as $d)
                    <tr>
                        <td class="text-center font-size-sm">{{$x}}</td>
                        <td class="d-sm-table-cell font-size-sm">{{ucwords($d->city->province->name)}}</td>
                        <td class="d-sm-table-cell font-size-sm">{{$d->city->name}}</td>
                        <td class="d-sm-table-cell font-size-sm">{{$d->name}}</td>
                        <td class="text-center">
                            <a onClick='showM("{{url('district/'.$d->id.'/edit')}}");return false' type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit"><i class="fas fa-fw fa-pencil-alt"></i></a>
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
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section ('footerScript')
@livewireScripts
<script> Livewire.restart();</script>
<script src="{{asset('public/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('public/js/siapfulin.datatable.js')}}"></script>
<script src="{{asset('public/js/siapfulin.js')}}"></script>
@endsection