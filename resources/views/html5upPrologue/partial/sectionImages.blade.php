@foreach($section->images as $image)
    <div class="4u">
        <article class="item">
            <a class="image fit section-selector fancybox"  rel="section_images" href="{{{ asset('images/gallery/' . $image->filename . '.jpg') }}}"><img src="{{{ asset('images/gallery/' . $image->filename . '.jpg') }}}" alt="" /></a>
            <header>
                <h3>{{{ $section->title }}}</h3>
            </header>
        </article>
    </div>
@endforeach
<script>
    $("a.fancybox").fancybox({
        'transitionIn'	:	'elastic',
        'transitionOut'	:	'elastic',
        'speedIn'		:	600,
        'speedOut'		:	200,
        'overlayShow'	:	false
    });

</script>