@extends('back.partials.html')




@section('content') 
<h1 class="text-center my-3"> Update Data link</h1>

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




<form action="{{route('sociallink.update',$sociallink->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

{{-- <div class="mb-3">
    <div class="d-flex">
        <i class="fab fa-{{$sociallink->icon->name}} mr-1"></i>
        <label for="name" class="form-label">{{$sociallink->icon->name}}</label>
    </div>  
    <input type="text" value = "{{$sociallink->link}}" class="form-control" id="link" name="link">
</div> --}}
    {{-- {{dd($sociallink->icon->get())}} --}}

<div class="mb-3">
<select name="icon_id" id="icon_id" class="mb-2">
    <p>Icon lien social</p>

    @foreach ($sociallink->icon->get() as $icon )

    @if ($sociallink->icon->id  === $icon->id)
    <option selected value="{{$icon->id}}">{{$icon->name}}</i></option>
        
    @else
    
    <option  value="{{$icon->id}}">{{$icon->name}}</i></option>
    @endif
    
     
    @endforeach
</select>
    <div class="container d-flex align-items-center">

        Link: <input type="text" value ="{{$sociallink->link}}" class="form-control" id="link" name="link" >
    </div>

</div>


<button type="submit" class="btn btn-primary mx-auto">Submit</button>

</form>  
</div>   
@endsection