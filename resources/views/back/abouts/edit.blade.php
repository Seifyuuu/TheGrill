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
<form enctype="multipart/form-data" action="{{route("about.update", $about->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div>
    <label for="">Titre 1 :</label>
    <input type="text" name="titre1" value="{{$about->titre1}}">
    <br>
    <label for="">Titre 2 :</label>
    <input type="text" name="titre2" value="{{$about->titre2}}">
    <br>
    <label for="">Texte 1 :</label>
    <input type="text" name="texte1" value="{{$about->texte1}}">
    <br>
    <label for="">Texte 2 :</label>
    <input type="text" name="texte2" value="{{$about->texte2}}">

    </div>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>


@endsection