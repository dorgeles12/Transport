@extends('layouts.app')
@section('content')
<div class="row px-md-3">
    <div class="col-9">
        <div class="jumbotron">
            <h1 class="display-4">Create a new company</h1>
            <div class="container">
                    <form action="{{ route('companies.store')}}" method="post">
                        {{ csrf_field() }}

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
                                    style="resize:vertical"
                                    rows="5">
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
                <li><a href="/companies">View companies</a></li>
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