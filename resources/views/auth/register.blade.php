@extends('layouts.login.layout')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
                <div class="login-form1 text-center p-7 position-relative overflow-hidden">
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="https://www.lovlin.com/wp-content/uploads/2020/09/logo_lovlin_web_3.png" class="max-h-75px" alt=""/>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="app">
                                <invite-team-dashboard-user></invite-team-dashboard-user>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
