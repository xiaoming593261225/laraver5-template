@extends('admin/home')
@section('content')
    <h3>Profils</h3>
    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            @foreach($locales as $locale => $name)
                <li role="presentation" class="@if($locale == 'lv') active @endif">
                    <a href="#{{{ $locale }}}_profile" aria-controls="home" role="tab" data-toggle="tab">
                        {{{ strtoupper($name) }}}
                    </a>
                </li>
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            @foreach($locales as $locale => $name)

                <div role="tabpanel" class="tab-pane @if($locale == 'lv') active @endif" id="{{{ $locale }}}_profile">
                    {!! Form::open(['class' => 'form']) !!}
                        <div class="form-group">
                            <?php
                                $content = null;
                                if (isset($profileData[$locale])) {
                                    $content = $profileData[$locale];
                                }
                            ?>
                            {!! Form::textarea('content', $content, ['class' => 'form-control']) !!}
                        </div>
                    <div class="form-group">
                        {!! Form::hidden('locale', $locale) !!}
                        {!! Form::token() !!}
                        {!! Form::submit('Saglabāt', ['class' => 'btn']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            @endforeach
        </div>
    </div>

@endsection