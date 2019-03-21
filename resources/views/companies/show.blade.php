@extends('layouts.app')
@section('content')
<div class="row px-md-3">
    <div class="col-9">
        <div class="jumbotron">
            <div class="container text-center">
                <h1 class="display-4">{{ $company->name }}</h1>
                <p class="font-weight-bold h4">{{$company->description}}</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
            </div>
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    @foreach($company->projects as $project)
                    <div class="col-md-4">
                        <h2>{{$project->name}}</h2>
                        <p class="lead">{{$project->description}}</p>
                        <p><a class="btn btn-secondary" href="/projects/{{$project->id}}" role="button">View details »</a></p>
                    </div>
                    @endforeach
                </div>
                <hr>
            </div> <!-- /container -->
        </div> <!-- /Jumbo -->
    </div>
    <!--  -->
    <div class="col-3">
        <div class="sidebar-module">    
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                <li><a href="/projects/create">Add Project</a></li>
                <li><a href="/companies">List of my Companies</a></li>
                <li><a href="/companies/create">Create New Company</a></li>
                    <br>
                <li>
                    <a href="#" 
                        onclick="
                            var result = confirm('Are you sure you want to delete this Company?');
                            if(result){
                                event.preventDefault();
                                document.getElementById('delete-form').submit();
                            }
                                ">
                        Delete
                    </a>

                    <form action="{{route('companies.destroy',[$company->id])}}" method="post" id="delete-form" style="display:none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                    </form>
                </li>
                <!-- <li><a href="">Add new member</a></li> -->
            </ol>
        </div>
        <div class="sidebar-module">    
            <h4>Members</h4>
            <ol class="list-unstyled">
                <!-- <li><a href="">Add new member</a></li> -->
            </ol>
        </div>
    </div>
</div>
@endsection