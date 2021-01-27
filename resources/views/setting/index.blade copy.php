@extends('template')
@section('content')

<div class="content">
    <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#company"><i class="fas fa-building"></i> Company</a></li>
            <li class="nav-item"><a class="nav-link" href="#appearance"><i class="fas fa-desktop"></i> Appearance</a></li>
            <li class="nav-item"><a class="nav-link" href="#accounting"><i class="fas fa-money-bill-wave"></i> Accounting</a></li>
            <li class="nav-item"><a class="nav-link" href="#transaction"><i class="fas fa-exchange-alt"></i> Transaction</a></li>
            <li class="nav-item"><a class="nav-link" href="#system"><i class="fas fa-window-alt"></i> System</a></li>
            <li class="nav-item"><a class="nav-link" href="#category"><i class="fas fa-list-alt"></i> Category</a></li>

        </ul>
        <div class="block-content tab-content overflow-hidden">
            <div class="tab-pane fade fade-right show active" id="company" role="tabpanel">
                <form class="mb-5" action="{{url('')}}" method="POST" onsubmit="return false;">
                    <div class="block-header bg-primary"><h3 class="block-title">General</h3></div>
                    <div class="block-content font-size-sm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="company name">Company Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="company" placeholder="Company Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="npwp">NPWP</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="js-masked-npwp form-control" name="npwp" placeholder="99.999.999.9-999.999">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Company Logo</label>
                                    <div class="push">
                                        <img class="img-avatar" src="{{asset('public/media/avatars/avatar13.jpg')}}" alt="">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="one-profile-edit-avatar" name="one-profile-edit-avatar">
                                        <label class="custom-file-label" for="one-profile-edit-avatar">Choose a new avatar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="block-header bg-warning"><h3 class="block-title">Address</h3></div>
                    <div class="block-content font-size-sm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="Address">Address</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" name="address" rows="2" style="overflow: hidden;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="city">City</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="city" placeholder="City..">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="zip">Postal Zip</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="js-masked-zip form-control" name="zip" placeholder="99999">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="country">Country</label>
                                    <div class="col-sm-7">
                                        <select class="js-select2 form-control" name="country" style="width: 100%;" data-placeholder="Choose one..">
                                            <option value=""></option>
                                            @foreach($country as $c)
                                                <option value="{{$c['name']}}" data-image="{{$c['flag']}}">{{$c['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-header bg-danger"><h3 class="block-title">Contact</h3></div>
                    <div class="block-content font-size-sm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="Address">Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Name..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="phone">Phone</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control numonly" name="phone" placeholder="Phone..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="mobile phone">Mobile Phone</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control numonly" name="mobile" placeholder="Mobile Phone..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="Fax">Fax</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control numonly" name="Fax" placeholder="Fax..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label" for="Email">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" placeholder="Email..">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-footer"><button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button></div>
                </form>
            </div>

            <div class="tab-pane fade fade-right" id="appearance" role="tabpanel">
                <h4 class="font-w400">appearance Content</h4>
                <p>Content slides in to the right..</p>
            </div>

            <div class="tab-pane fade fade-right" id="accounting" role="tabpanel">
                <h4 class="font-w400">Profile Content</h4>
                <p>Content slides in to the right..</p>
            </div>

            <div class="tab-pane fade fade-right" id="transaction" role="tabpanel">
                <h4 class="font-w400">transaction Content</h4>
                <p>Content slides in to the right..</p>
            </div>

            <div class="tab-pane fade fade-right" id="system" role="tabpanel">
                <div class="block-content font-size-sm">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="Address">Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="City..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="phone">Phone</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control numonly" name="phone" placeholder="Phone..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="mobile phone">Mobile Phone</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control numonly" name="mobile" placeholder="Mobile Phone..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="Fax">Fax</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control numonly" name="Fax" placeholder="Fax..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label" for="Email">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Email..">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade fade-right" id="category" role="tabpanel">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-default-tab" data-toggle="pill" href="#vert-tabs-default" role="tab" aria-controls="vert-tabs-default" aria-selected="true">Default</a>
                                @foreach($marketplace as $mp)
                                    <a class="nav-link" id="vert-tabs-{{$GeneralTrait->charOnly('',$mp->name)}}-tab" data-toggle="pill" href="#vert-tabs-{{$GeneralTrait->charOnly('',$mp->name)}}" role="tab" aria-controls="vert-tabs-{{$GeneralTrait->charOnly('',$mp->name)}}" aria-selected="false">{{$mp->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-default" role="tabpanel" aria-labelledby="vert-tabs-default-tab">
                                    <table class="table table-bordered table-striped dt-responsive table-vcenter js-dataTable" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Parent</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($parentcategory as $pc)
                                                @if($pc->category=='default')
                                                    <tr>
                                                        <td class="text-center"><i class="fas fa-lock text-primary"></i></td> <td>{{$pc->name}}</td> <td></td> <td></td>
                                                    </tr>
                                                    @php $d=1 @endphp
                                                    @foreach($childcategory as $cc)
                                                        @if($cc->parent_category_id==$pc->id)
                                                            <tr>
                                                                <td class="text-center">{{$d}}</td>
                                                                <td>{{$cc->name}}</td>
                                                                <td>{{$cc->child->name}}</td>
                                                                <td></td>
                                                            </tr>
                                                            @php $d++ @endphp
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @for($x=0;$x<count($marketplace);$x++)
                                    <div class="tab-pane fade" id="vert-tabs-{{$GeneralTrait->charOnly('',$marketplace[$x]->name)}}" role="tabpanel" aria-labelledby="vert-tabs-{{$GeneralTrait->charOnly('',$marketplace[$x]->name)}}-tab">
                                    <h3 class="block-title">{{ucwords($marketplace[$x]->name)}}</h3><br>
                                        <table class="table table-bordered table-striped dt-responsive table-vcenter js-dataTable" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>Parent</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($parentcategory as $pc)
                                                    @if($pc->category=='default')
                                                        <tr>
                                                            <td class="text-center"><i class="fas fa-lock text-primary"></i></td> <td>{{$pc->name}}</td> <td></td> <td></td>
                                                        </tr>
                                                        @php $d=1 @endphp
                                                        @foreach($childcategory as $cc)
                                                            @if($cc->parent_category_id==$pc->id)
                                                                <tr>
                                                                    <td class="text-center">{{$d}}</td>
                                                                    <td>{{$cc->name}}</td>
                                                                    <td>{{$cc->child->name}}</td>
                                                                    <td></td>
                                                                </tr>
                                                                @php $d++ @endphp
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                        
                                            </tbody>
                                        </table>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section ('headerScript')
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" id="css-main" href="{{asset('public/js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section('footerScript')
<script src="{{asset('public/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('public/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('public/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('public/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('public/js/siapfulin.js')}}"></script>
<script>
    jQuery(function () {
        Siap.helpers([ 'select2','masked-inputs']);
    });
    
    $(document).ready(function () {
        $('.js-select2').select2({
            templateResult: formatState,
            templateSelection: formatState
        });

        function formatState (opt) {
            if (!opt.id) {
                return opt.text.toUpperCase();
            }
            var optimage = $(opt.element).data('image');
            if(!optimage){
                return opt.text;
            } else {
                var $opt = $(
                    '<span><img src="' + optimage + '" width="23px" /> ' + opt.text + '</span>'
                );
                return $opt;
            }
        };
    });
</script>
@endsection
