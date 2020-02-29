@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @include('messages')
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-2 mr-auto">
                            <h2>Projecten:</h2>
                        </div>
                        <div class="col-2 ml-auto p-0">
                            <a href="/makeproject" class="btn btn-primary float-right mr-3">Project aanmaken.</a>
                        </div>

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ProjectNaam</th>
                                <th scope="col">Beschrijving</th>
                                <th scope="col">Aangemaakt op:</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $project)
                                <tr>
                                    <td><a href="project/{{$project->id}}">{{$project->projectname}}</a></td>
                                    <td>{!!$project->beschrijving!!}</td>
                                    <td>{{$project->created_at->format('d-m-Y H:i')}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
