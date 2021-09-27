@extends('back.partials.html')




@section('content') 
<h1 class="text-center my-3"> Create link social</h1>

<div class="container d-flex flex-column justify-content-center  mb-5 w-50">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif




<form action="{{route('icon.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container d-flex align-items-center my-2">
        <label for="name">Nom reseau social:</label>
         <input type="text"  class="form-control" id="name" name="name" >
    </div>

    
</div>
<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary ">Submit</button>
</div>



</form>  
</div>   
@endsection