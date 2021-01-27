@extends('template')
@section('content')
<div class="hero-static">
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="block block-rounded block-themed mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Siapfulin</h3>
                        <div class="block-options">
                            <a class="btn-block-option" href="{{url('/')}}" data-toggle="tooltip" data-placement="left" title="Sign In">
                                <i class="fa fa-sign-in-alt"></i>
                            </a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="p-sm-3 px-lg-3 py-lg-3">
                            <h2 class="h2 mb-1">Register</h2>
                            <form action="{{url('register')}}" method="POST" onsubmit="submit.disabled = true; return true;">@csrf
                                @livewire('register')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerScript')
    @livewireStyles
    @livewireScripts
@endsection
