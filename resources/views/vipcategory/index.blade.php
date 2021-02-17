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
                        {!!Session('type')=='admin'?'<th>Event</th>':''!!}
                        <th>Refunable</th>
                        <th>Qty</th>
                        <th>NUP Fee</th>
                        <th>Last No</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $x=1 @endphp
                    @foreach($vipcategory as $vc)
                     <tr>
                        <td class="text-center font-size-sm">{{$x}}</td>
                        <td class="d-sm-table-cell font-size-md"><span class='badge' style='background-color:{{$vc->color}};color:#FFF;border:1px solid {{$vc->color}}'>{{$vc->name}}<span></td>
                        {!!Session('type')=='admin'?'<td class="d-sm-table-cell font-size-sm ">'.$vc->event->name.'</td>':''!!}
                        <td class="d-sm-table-cell font-size-md"><span class='badge' style='background-color:{{$vc->refundable==1?'#00FF00':'#ff0000'}};color:#FFF;border:1px solid {{$vc->refundable==1?'#00FF00':'#ff0000'}}'>{{$vc->refundable==1?'Refundable':'Nonrefundable'}}<span></td>
                        <td class="d-sm-table-cell font-size-sm">{{$vc->qty}}</td>
                        <td class="d-sm-table-cell font-size-sm">{{number_format("$vc->nupfee",0,".",",")}}</td>
                        <td class="d-sm-table-cell font-size-sm">{{$vc->lastno}}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                @livewire('active', ['status' => $vc->active,'modul'=>'vipcategory','key'=> $vc->id])
                                <a onClick='showM("{{url('vipcategory/'.$vc->id.'/edit')}}");return false' type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit"><i class="fas fa-fw fa-pencil-alt"></i></a>
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
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
@endsection

@section ('footerScript')
<script src="{{asset('public/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('public/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('public/js/siapfulin.js')}}"></script>
@endsection