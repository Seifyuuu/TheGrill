@extends('back.partials.html')




@section('content')
<div class="container mb-5">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">nom Icon</th>
      <th scope="col">Link</th>
      <th scope="col">Nom Chef</th>
      <th scope="col">footer_id</th>
      <th scope="col " class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($sociallinks as $link )
          
      <tr>
        <th scope="row">{{$link->id}}</th>
        
        @if($link->icon ===null)

        <td>Null</td>
        @else

        <td>{{$link->icon->name}}</td>
        @endif
        <td>{{$link->link}}</td>
        @if($link->chef ===null)

        <td>Null</td>
        @else

        <td>{{$link->chef->name}}</td>
        @endif

        @if($link->footer ===null)

        <td>Null</td>
        @else

        <td>{{$link->footer->id}}</td>
        @endif
        
        <td>
            <form action="{{route('sociallink.destroy',$link->id)}}" method="post" class="d-flex justify-content-center my-3">
                @csrf
                @method('DELETE')
                <a href="{{route('sociallink.edit',$link->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
      </tr>
      @endforeach
 
  </tbody>
</table>  
    <div class="container d-flex justify-content-center">
    
        <a href="{{route('sociallink.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
    </div> 
</div>
@endsection