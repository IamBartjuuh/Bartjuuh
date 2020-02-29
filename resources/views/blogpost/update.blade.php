@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-end">
        <div class="col-md-8">
            <h3 class="d-flex justify-content-center display-3">{{$data->projectname}}</h3>
            <p class="d-flex justify-content-center">{!!$data->beschrijving!!}</p>
        </div>
        <div class="col-md-2">
            <small class="justify-content-end"><i>Gemaakt op: {{$data->created_at->format('d-m-Y H:i')}}</i></small>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="form-group row mb-0"><h4 class="offset-md-2 col-md-2 display-5 mt-2 text-md-left">Blog Post toevoegen.</h4></div>
            @include('messages')
            <form action="/project/{{$data->id}}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-2">
                    <label for="blogpost" class="offset-md-2 col-md-2 col-form-label text-md-left">Blogpost:</label>
                    
                    <div class="col-md-6">
                        <textarea name="blogpost" id="article-ckeditor" class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="3" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="submit" class="col-md-4 col-form-label text-md-left"></label>
                    <div class="col-md-6">  
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
