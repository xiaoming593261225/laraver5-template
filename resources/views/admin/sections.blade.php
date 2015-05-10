@extends('admin/home')
@section('content')
    <h3>Sadaļas</h3>
    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#section-modal">Pievienot sadaļu</a>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nosaukums</th>
                <th>Attēlu skaits</th>
                <th>Skatījumu skaits</th>
                <th>Aktīva</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
                <tr>
                    <td>{!! $section->title !!}</td>
                    <td><span class="label label-warning">{!! $section->images->count() !!}</span></td>
                    <td><span class="label label-warning">TODO</span></td>
                    <td>@if($section->active) <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> @else @endif</td>
                    <td><span class="label label-warning">TODO action buttons</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="section-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pievienot sadaļu</h4>
                </div>
                <div class="modal-body">
                    <form class="form ajax-form section-form" action="{{ URL::route('adminSectionsAdd') }}">
                        <input type="text" name="title" class="form-control" placeholder="nosaukums">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default ajax-form-cancel" data-dismiss="modal">Atcelt</button>
                    <button type="button" class="btn btn-primary ajax-form-submit" data-form="section-from">Saglabāt</button>
                </div>
            </div>
        </div>
    </div>
@endsection