@extends('admin/home')
@section('content')
    <h3>Profils</h3>
    {!! Form::open(['class' => 'form']) !!}
        <div class="form-group">
            {!! Form::select('locale', ['lv' => 'Latviešu', 'en' => 'English'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('profileContent', null, ['class' => 'form-control']) !!}
            {!! Form::token() !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Saglabāt', ['class' => 'btn']) !!}
        </div>
    {!! Form::close() !!}
@endsection