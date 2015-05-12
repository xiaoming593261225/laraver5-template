<div class="panel panel-default @if(count($images) == 0) hidden @endif() unprocessed-images" @if(isset($sectionId)) data-section="{!! $sectionId !!}" @endif>
    <div class="panel-heading" data-toggle="collapse" data-target="#unprocessedCollapse" aria-expanded="true" aria-controls="unprocessedCollapse">
        <span class="panel-title">{!! $title !!}</span>
    </div>
    <div  id="unprocessedCollapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            @foreach($images as $image)
                <a href="#" class="thumbnail inline-block">
                    <img src="{{ asset('images/gallery/' . $image->filename . '_thumb.jpg')  }}">
                </a>
            @endforeach
        </div>
    </div>
</div>