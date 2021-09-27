@extends('back.partials.html')




@section('content')
<div class="container mb-5">
 <table class="table">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">nom Icon Social</th>
      <th scope="col">Symbole</th>

      <th scope="col " class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($icons as $icon )
          
      <tr>
        <th scope="row">{{$icon->id}}</th>
        
     
        <td>{{$icon->name}}</td>
        <td><i class="fab fa-{{$icon->name}}"></i></td>
        
        <td>
            <form action="{{route('icon.destroy',$icon->id)}}" method="post" class="d-flex justify-content-center my-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
      </tr>
      @endforeach
 
  </tbody>
</table>  
    <div class="container d-flex justify-content-center">
    
        <a href="{{route('icon.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
    </div> 
</div>
@endsection