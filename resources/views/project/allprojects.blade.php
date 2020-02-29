@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row nieuw padding mid">
		<div class="col-md-12 col-lg-12 center" data-aos="zoom-in">
			<h2 class="d-flex justify-content-center display-2">Projecten</h2>
			<hr>
			<p class="text-lgr d-flex justify-content-center">Op deze pagina kun je al mijn projecten vinden. Het laatst aangemaakte project staat bovenaan.</p>
		</div>
    </div>
    @foreach ($data as $project)
    <div class="row nieuw padding mid justify-content-center">
		<div class="col-md-8 col-lg-8 " data-aos="zoom-in">
            <a href="/project/{{$project->id}}"><h2 class="display-4">{{$project->projectname}}</h2></a>
			<hr>
			<div class="text-lgr">
                {!!$project->beschrijving!!} 
            </div>
		</div>
	</div>
    @endforeach
@endsection