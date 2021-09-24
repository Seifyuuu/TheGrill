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


 <h1 class="text-center my-3"> Update Data Chef</h1>

<form action="{{route('chef.update',$chef->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="name" class="form-label">Nom </label>
    <input type="text" value = "{{$chef->name}}" class="form-control" id="name" name="name">
</div>

<div class="mb-3">
    <label for="img" class="form-label">Photo</label>
    <input type="file" value ="{{$chef->img}}"   class="form-control" id="img" name="ville" >
</div>
<div class="mb-3">
    <p>Icon lien social</p>
    @foreach ($chef->sociallinks as $link )
    <div class="d-flex flex-column p-3">

        <div class="d-flex">
            <i class="fab fa-{{$link->icon->name}} mr-1"></i>
            <label for="name" class="form-label">{{$link->icon->name}}</label>
        </div>  
            <input type="text" value ="{{$link->link}}" class="form-control" id="name" name="name" >
            <form action="{{route('icon.destroy',$link->icon->id)}}" method="post" class="d-flex justify-content-center my-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
    </div>
    @endforeach
</div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection