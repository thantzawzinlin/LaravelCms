@extends('layouts.app')




@section('content')

 <div class="card">
  <div class="card-header">Update Your Category </div>
  <div class="card-body">
        <form action="{{route('category.update',['id'=>$category->id])}}" method="POST">
          @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update Category</button>
            </div>
        
        
        </form>
    
    
  </div>
</div>




@endsection