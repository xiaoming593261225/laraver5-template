@extends('admin/home')
@section('content')
    <h3>Attēli</h3>

    @include('admin/uploadForm')

    @include('admin/imageSection', ['title' => 'Nepiesaistītie attēli', 'images' => $inactiveImages, 'id' => 'unprocessedImages'])

    @foreach($sections as $section)
        @include('admin/imageSection', ['sectionId' => $section->id, 'title' => $section->title, 'images' => $section->images, 'id' => 'section_' . $section->id])
    @endforeach

@endsection

@section('javascripts')

    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="{{ asset('/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.iframe-transport.js') }}"></script>
    <!-- The basic File Upload plugin -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
    <!-- The File Upload processing plugin -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload-process.js') }}"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload-image.js') }}"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload-audio.js') }}"></script>
    <!-- The File Upload video preview plugin -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload-video.js') }}"></script>
    <!-- The File Upload validation plugin -->
    <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload-validate.js') }}"></script>

    <script src="{{ asset('/js/admin.images.js') }}"></script>

@endsection

@section('stylesheets')
    <link href="{{ asset('/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet">
@endsection