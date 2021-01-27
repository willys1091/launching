@extends('template')
@section('content')
@inject('GeneralTrait', 'App\Http\Controllers\SettingController')
<div class="content">
    <div class="block block-rounded">
        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#company"><i class="fas fa-building"></i> Company</a></li>
            <li class="nav-item"><a class="nav-link"  href="#appearance"><i class="fas fa-desktop"></i> Appearance</a></li>
            <li class="nav-item"><a class="nav-link" href="#accounting"><i class="fas fa-money-bill-wave"></i> Accounting</a></li>
            <li class="nav-item"><a class="nav-link" href="#transaction"><i class="fas fa-exchange-alt"></i> Transaction</a></li>
            @if(Session('type')=='admin')
                <li class="nav-item"><a class="nav-link" href="#system"><i class="fas fa-window-alt"></i> System</a></li>
                <li class="nav-item"><a class="nav-link" href="#category"><i class="fas fa-list-alt"></i> Category</a></li>
            @endif
            </ul>
        
        <div class="block-content tab-content overflow-hidden">
            <div class="tab-pane fade fade-right show active" id="company" role="tabpanel">
                @livewire('setting-company')
            </div>

            <div class="tab-pane fade fade-right" id="appearance" role="tabpanel">
                
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
                @livewire('setting-category',['cat'=>'default'])
                
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
@livewireStyles
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
<script src="{{asset('public/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('public/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('public/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

<script src="{{asset('public/js/siapfulin.js')}}"></script>
@livewireScripts
@stack('scripts')
<script>
    jQuery(function () {
        Siap.helpers([ 'flatpickr', 'maxlength','masked-inputs']);
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
