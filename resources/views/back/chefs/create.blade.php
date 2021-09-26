@extends("back.partials.html")

@section("content")    
<div class="container d-flex flex-column mb-5 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Create Data Chef</h1>

<form action="{{route('chef.store')}}" method="post" enctype="multipart/form-data">
    @csrf

<div class="mb-3">
    <label for="name" class="form-label">Nom </label>
    <input type="text" value = "{{old('name')}}" class="form-control" id="name" name="name">
</div>

<div class="mb-3">
    <label for="img" class="form-label">Photo</label>
    <input type="file"   class="form-control" id="img" name="img" >
</div>

<div class="mb-3" id="liens">
<a class="btn btn-info" onclick="()=>{

    var node = <div class='d-flex'>Nom reseau social:<input type='texte'> lien:<input type='texte'> </div>;
    document.getElementById('liens').insertBefore(node);
} "> Ajouter lien social</a>
</div>


{{-- <div class="mb-3">
    <p>lien social</p>

    @foreach ($chef->sociallinks as $link )
    <div class="d-flex flex-column p-3">

        <div class="d-flex">
            <i class="fab fa-{{$link->icon->name}} mr-1"></i>
            <label for="link" class="form-label">{{$link->icon->name}}</label>
        </div>  
           Link: <input type="text" value ="{{$link->link}}" class="form-control" id="link" name="link" >



    </div>
    @endforeach
</div> --}}


<button type="submit" class="btn btn-primary">Submit</button>

</form>  

</div>   
@endsection