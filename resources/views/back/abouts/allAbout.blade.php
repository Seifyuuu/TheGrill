@extends("back.partials.html")

@section("content")
<br>  
<h1 style="text-align: center">About</h1>
<br>
<div style="display: flex; justify-content:center; flex-direction:wrap;" class="w-100">
@foreach ($abouts as $item )
    <div class="card w-50">
        <br>    
        <span>- <b>Titre 1</b> : <i>{{$item->titre1}}</i></span>
        <br>
        <span>- <b>Titre 2</b> : <i>{{$item->titre2}}</i></span>
        <br>
        <span>- <b>Texte 1</b> : <i>{{$item->texte1}}</i></span>
        <br>
        <span>- <b>Texte 2</b> : <i>{{$item->texte2}}</i></span>
        <br>
        <a class="btn btn-info" href="{{route("about.edit", $item->id)}}">Edit</a>
        <br>
    </div>
@endforeach
</div>
@endsection