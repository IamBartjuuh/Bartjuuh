@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <div class="form-group row mb-0"><h2 class="col-md-2 display-5 mt-2 text-md-left">Nieuw Project.</h2></div>
        @include('messages')
        <form action="/newproject" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row mb-2">
                <label for="projectname" class="col-md-2 col-form-label text-md-left">Project Naam:</label>
                
                <div class="col-md-9 pl-0">
                <input type="text" maxlength="100" name="projectname" id="aanvrager" class="form-control"  required>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="beschrijving" class="col-md-2 col-form-label text-md-left">Omschrijving:</label>
                
                <div class="col-md-9 pl-0">
                    <textarea name="beschrijving" id="article-ckeditor" class="form-control" id="exampleFormControlTextarea1" maxlength="500" rows="3" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                    <label for="submit" class="col-md-2 col-form-label text-md-left"></label>
                <div class="col-md-9 pl-0">  
                    <button type="submit" id="submit" class="btn btn-primary">
                        {{ __('Aanvragen') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection