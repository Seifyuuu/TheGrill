@extends("back.partials.html")

@section("content")    
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form enctype="multipart/form-data" action="{{route("heure.update", $heure->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content:center;">

    <span></span>   
    <input class="w-50" type="text" name="jour" value="{{$heure->jour}}">
    <input class="w-50" type="text" name="time" value="{{$heure->time}}">
    </div>
    <br>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection


