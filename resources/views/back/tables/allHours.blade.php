@extends("back.partials.html")

@section("content")    

<h1 style="text-align: center">Horaire</h1>
<br>
<div style="display: flex; justify-content:center; flex-direction:wrap;" class="w-100">
    @foreach ($heures as $item )
        <div class="card w-50">
            <br>
            <span style="text-align: center"> <b>Horaire du jour</b><i>{{$item->jour}}</i> <br><i>{{$item->time}}</i></span>
            <br>
            <div style="display: flex; justify-content:center; flex-direction:wrap;"    >
            <a class="btn btn-info" href="{{route("heure.edit", $item->id)}}">Edit</a>
            </div>
            <br>
        </div>
    @endforeach
    </div>

@endsection