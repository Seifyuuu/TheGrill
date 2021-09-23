@extends("back.partials.html")

@section("content")    

<form enctype="multipart/form-data" action="{{route("service.update", $service->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div>
    <label for="">Titre 1 :</label>
    <input type="text" name="titre1" value="{{$service->titre1}}">
    <br>
    <label for="">Titre 2 :</label>
    <input type="text" name="titre2" value="{{$service->titre2}}">
    <br>
    <label for="">Texte 1 :</label>
    <input type="text" name="texte" value="{{$service->texte}}">
    <br>
    <label for="">Texte bouton:</label>
    <input type="text" name="texteBtn" value="{{$service->texteBtn}}">

    </div>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>


@endsection