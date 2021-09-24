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


 <h1 class="text-center my-3"> Update Data Footer</h1>

<form action="{{route('footer.update',$footer->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

<div class="mb-3">
    <label for="copyright" class="form-label">Copyright </label>
    <input type="text" value = "{{$footer->copyright}}" class="form-control" id="copyright" name="copyright">
</div>


<div class="mb-3">
    <p>Icon lien social</p>
                    @foreach ($footer->sociallinks()->where('footer_id','!=',null)->get() as $link )
    <div class="d-flex flex-column p-3">

        <div class="d-flex">
            <i class="fab fa-{{$link->icon->name}} mr-1"></i>
            <label for="name" class="form-label">{{$link->icon->name}}</label>
        </div>  
           Link: <input type="text" value ="{{$link->link}}" class="form-control" id="name" name="name" >
            <form action="{{route('sociallink.destroy',$link->id)}}" method="post" class="d-flex justify-content-center my-3">
                @csrf
                @method('DELETE')
                <a href="{{route('sociallink.edit',$link->id)}}" class="btn btn-warning mr-2"><i class="fas fa-edit"></i></a>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
    </div>
    @endforeach
</div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>  
</div>   
@endsection