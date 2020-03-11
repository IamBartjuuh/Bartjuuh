@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="form-group row mb-0"><h4 class=" col-md-2 display-5 mt-2 text-md-left">Blog Post Veranderen.</h4>
            <form action="/blogpost/delete/{{$data->id}}" style="display: inline; margin-right: 1em;" method="POST">
                @csrf
                <button type="button" class="btn btn-danger align-right btn-sm col align-self-end" data-toggle="modal" data-target="#Delete{{$data->id}}"><i class="fas fa-trash-alt"></i> Verwijder</button></div>
                <div class="modal fade" id="Delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="DeleteLabel" style="color: #e33d3d;">WARNING!</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <b>Weet je zeker dat je deze blogpost wilt verwijderen?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Nee</button>
                            <button type="submit" class="btn btn-success">Ja</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
            @include('messages')
            <form action="/blogpost/{{$data->id}}/change" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-2">
                    <label for="blogpost" class="col-md-2 col-form-label text-md-left">Blogpost:</label>
                    
                    <div class="col-md-9 pl-0">
                    <textarea name="blogpost" id="article-ckeditor" class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="3" required>{{$data->blogpost}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="submit" class="col-md-2 col-form-label text-md-left"></label>
                    <div class="col-md-9 pl-0">  
                        <button type="submit" id="submit" class="btn btn-primary">
                            {{ __('Post') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
