@extends("back.partials.html")

@section("content")    
<div class="d-flex flex-wrap justify-content-between m-5">
@foreach ($chefs as $chef )
    
<div class="card my-3" style="width: 18rem;">
  <img src="{{asset("img/team/".$chef->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$chef->name}} Test</h5>
    <p class="card-text">
        <ul class="d-flex justify-content-between w-75 my-3" >
            @foreach ($chef->sociallinks as $link )
            <li>
                <a href="{{$link->link}}"><i class="fab fa-{{$link->icon->name}}"></i></a>
            </li>
            @endforeach
        </ul>
    </p>
    <div class="d-flex justify-content-center">
            <a href="{{route('chef.edit',$chef->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
            <form action="{{route('chef.destroy',$chef->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
            </form>
    </div>
  </div>
</div>
@endforeach
      <div class="container d-flex justify-content-center">
      
          <a href="{{route('chef.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
      </div>
</div>
@endsection