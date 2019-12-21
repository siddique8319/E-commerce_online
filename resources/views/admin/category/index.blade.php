@extends('admin.master')
@section('title','Category Page')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h3>List Categories</h3><br>
        <form action="{{route('category.store')}}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Category name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <br><br>
        <ul class="nav navbar-nav">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                    </tr>
                    </thead>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </ul>
    </main>
@endsection
