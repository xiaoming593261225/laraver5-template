<div class="panel panel-default image-section-wrapper" @if(isset($sectionId)) data-section="{!! $sectionId !!}" @endif>
    <div class="panel-heading" data-toggle="collapse" data-target="#{{{ $id }}}" aria-expanded="true" aria-controls="unprocessedCollapse">
        <span class="panel-title">{!! $title !!}</span>
    </div>
    <div  id="{{{ $id }}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            @foreach($images as $image)
                <div class="image-with-selector">
                    <a href="#" class="thumbnail inline-block">
                        <img src="{{ asset('images/gallery/' . $image->filename . '_thumb.jpg')  }}">
                    </a>
                    <select class="image-section-selector form-control" data-image="{{{ $image->id }}}">
                        <option value="">Izvēlies sadaļu</option>
                        @foreach($sections as $section)
                            <option value="{{{ $section->id }}}">{{{ $section->title }}}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach
        </div>
    </div>
</div>