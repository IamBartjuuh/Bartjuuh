@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-end" data-aos="fade-in">
        <div class="col-md-8">
            <h3 class="d-flex justify-content-center display-3">{{$data['project']->projectname}}</h3>
            <div class="d-flex justify-content-center text-lgr">{!!$data['project']->beschrijving!!}</div>
        </div>
        <div class="col-md-2">
            <small class="justify-content-end"><i>Gemaakt op: {{$data['project']->created_at->format('d-m-Y H:i')}}</i></small>@auth<br>
            <a class="btn btn-primary" role="button" href="{{$data['project']->id}}/aanpassen">Wijzig</a><a class="btn btn-primary ml-2" role="button" href="{{$data['project']->id}}/update">Blog Update</a>@endauth
        </div>
    </div>
    <div class="col-10 mx-auto" data-aos="fade-in">
        @foreach ($data['blogpost'] as $blog)
        <div class="row mb-2" data-aos="zoom-in">
            <div class="col-md-2 justify-content-end row pr-0">
                <small class="mt-2 mr-2">{{$blog->created_at->format('d-m-Y H:i')}}</small>
                <span class="badge badge-pill bg-light border" style="height: 3em; width: 3em;"> </span>
            </div>
            <div class="col-md-9">
                <hr style="border-top: 1px solid #dee2e6 !important;">
                <div>
                    {!!$blog->blogpost!!}
                </div>
            </div>
            @auth<div class="col-md-1">
                {{-- <a href="/blogpost/{{$blog->id}}/delete" class="mr-1"><i class="fas fa-trash-alt"></i></a> --}}
                <a href="/blogpost/{{$blog->id}}/change">Wijzig</a>
            </div>@endauth
        </div>
        @endforeach
    </div>


</div>
@endsection
