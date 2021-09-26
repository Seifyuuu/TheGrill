@extends('back.partials.html')




@section('content') 
<h1 class="text-center my-3"> Create link social</h1>

<div class="container d-flex flex-column justify-content-center border mb-5 vh-100 w-50">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif




<form action="{{route('sociallink.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container d-flex align-items-center my-2">

        Nom reseau social: <input type="text"  class="form-control" id="name" name="name" >
    </div>
    <div class="container d-flex align-items-center my-2">

        Link: <input type="text" class="form-control" id="link" name="link" >
    </div>

{{-- <div class="mb-3">
    <div class="d-flex">
        <i class="fab fa-{{$sociallink->icon->name}} mr-1"></i>
        <label for="name" class="form-label">{{$sociallink->icon->name}}</label>
    </div>  
    <input type="text" value = "{{$sociallink->link}}" class="form-control" id="link" name="link">
</div> --}}
    {{-- {{dd($sociallink->icon->get())}} --}}

    <div class="mb-3">
     <p>Ajouter au footer</p>
    <select name="icon_id" id="icon_id" class="mb-2">

        <option selected value="{{null}}"></option>
        @foreach ($footers as $footer )


            

        
        <option  value="{{$footer->id}}">footer</option>

        
        
        @endforeach
    </select>
    </div>

    <div class="mb-3">
    <p>Ajouter à un chef</p>
    <select name="chef_id" id="chef_id" class="mb-2">
        

        <option selected value="{{null}}"></option>
        @foreach ($chefs as $chef )


            

        
        <option  value="{{$chef->id}}">{{$chef->name}}</option>

        
        
        @endforeach
    </select>
    </div>
    <button type="submit" class="btn btn-primary mx-auto">Submit</button>
</div>



</form>  
</div>   
@endsection