@extends('client_base')
@section('login_form')
    <form class="login-form" method="post" action="{{ URL::to('authenticate') }}">
        <div class="form-group">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="lietotājvārds">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="******">
            </div>
            <div class="form-group">
                <input type="submit" value="Ienākt" class="btn" />
            </div>
        </div>
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </form>
@endsection
@section('stylesheets')
    <link href="{{ asset('/css/vylcans_admin.css') }}" rel="stylesheet">
@endsection