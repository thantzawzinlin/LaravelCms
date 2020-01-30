@extends('layouts.app')




@section('content')
   @include('includes.show-error')
 <div class="card">
  <div class="card-header">Create Your Category </div>
  <div class="card-body">
        <form action="{{route('category.store')}}" method="POST">
          @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create Category</button>
            </div>
        
        
        </form>
    
    
  </div>
</div>




@endsection