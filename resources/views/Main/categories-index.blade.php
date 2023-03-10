<?php use 
App\models\Category;
$list = Category::all();
?> 

@extends ('layouts.main-layout')
@section ('title', 'The different categories of news')
@section ('heading', 'eNews24 - categories')

@section ('content')


<div class = "row">
<div class = "col-md-8">
<h1> News Categories.....</h1>

<div class = "col-md-4">
    <a class = "btn btn-primary" href="{{ url('categories-create' ) }}"> create</a>

</div>

</div>
</div>
    
<div class="row">
        <div class="col-12">
             <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $item)

                    <tr>
                        <td> {{ $item->name }}</td>
                        <td>Edit,
                            <a href={{url('categories?delete='.$item->id)}} class="text-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                    

                    

                </tbody>
             </table>
        </div>
</div>
@endsection

