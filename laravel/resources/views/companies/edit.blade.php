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
                    <form action="{{ route('companies.update',[$company->id])}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="company-name">
                                Name <span class="required">*</span>
                            </label>
                            <input type="text"
                                    placeholder="Enter company name"
                                    id="company-name"
                                    required
                                    name="name"
                                    spellcheck="false"
                                    class="form-control"
                                    value="{{ $company->name }}"
                                >
                        </div>
                        <div class="form-group">
                            <label for="company-description">
                                Description <span class="required">*</span>
                            </label>
                            <textarea type="text"
                                    placeholder="Enter company description"
                                    id="company-description"
                                    required
                                    name="description"
                                    spellcheck="false"
                                    class="form-control autosize-target"
                                    value="{{$company->description}}"
                                    style="resize:vertical"
                                    rows="5">
                                    {{$company->description}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">
                        </div>
                    </form>
                <hr>
            </div> <!-- /container -->
        </div> <!-- /Jumbo -->
    </div>
    <!--  -->
    <div class="col-3">
        <div class="sidebar-module">    
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{ $company->id }}">View companies</a></li>
                <li><a href="/companies">All companies</a></li>
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