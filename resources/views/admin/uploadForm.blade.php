<div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-target="#addImages" aria-expanded="false" aria-controls="addImages">
        <span class="panel-title">Pievienot attēlus</span>
    </div>
    <div  id="addImages" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <!-- The fileinput-button span is used to style the file input field as button -->
            <span class="btn btn-success fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Izvēlēties...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="fileupload" type="file" name="file" multiple>
            </span>
            <select class="form-control section-select">
                @foreach($sections as $section)
                    <option value="{{{ $section->id }}}">{{{ $section->title }}}</option>
                @endforeach
            </select>
            <br>
            <br>
            <!-- The global progress bar -->
            <div id="progress" class="progress">
                <div class="progress-bar progress-bar-success"></div>
            </div>
            <!-- The container for the uploaded files -->
            <div id="files" class="files"></div>
        </div>
    </div>
</div>


