@extends('admin/home')
@section('content')
    <h3>Profils</h3>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            @foreach($profileData as $profile)
                <li role="presentation" class="@if($profile->locale == 'lv') active @endif">
                    <a href="#{{{ $profile->locale }}}_profile" aria-controls="home" role="tab" data-toggle="tab">
                        {{{ strtoupper($profile->locale) }}}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            @foreach($profileData as $profile)
                <div role="tabpanel" class="tab-pane @if($profile->locale == 'lv') active @endif" id="{{{ $profile->locale }}}_profile">
                    {!! Form::open(['class' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::textarea('content', $profile->content, ['class' => 'form-control']) !!}
                        </div>
                    <div class="form-group">
                        {!! Form::hidden('locale', $profile->locale) !!}
                        {!! Form::token() !!}
                        {!! Form::submit('Saglabāt', ['class' => 'btn']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            @endforeach
        </div>
    </div>

@endsection