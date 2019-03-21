@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header h2 bg-primary">
            <h2 class="card-title">Companies <a class="btn btn-primary float-right" href="/companies/create">Create new Company</a></h2>    
            
        </div>
        <div class="card-body">
    
            <ul class="list-group">
            @foreach($companies as $company)
                <li class="list-group-item"> <a href="/companies/{{$company->id}}">{{$company->name}}</a></li>
            @endforeach
            </ul>
    
        </div>
    </div>
</div>
@endsection