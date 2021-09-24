@extends("back.partials.html")

@section("content")    
<h1 style="text-align: center">Adresse</h1>

<div style="display: flex; justify-content:center; flex-direction:wrap;" class="w-100">
    @foreach ($tables as $item )
        <div class="card w-50">
            <br>    
            <span>- <b>Name</b> : <i>{{$item->name}}</i></span>
            <br>
            <span>- <b>Address</b> : <i>{{$item->address}}</i></span>
            <br>
            <span>- <b>Address 2</b> : <i>{{$item->address2}}</i></span>
            <br>
            <span>- <b>Numéro</b> : <i>{{$item->num}}/5</i></span>
            <br>
            <div style="display: flex; justify-content:center; flex-direction:wrap;"    >
            <a class="btn btn-info" href="{{route("table.edit", $item->id)}}">Edit</a>
            </div>
            <br>
        </div>
    @endforeach
    </div>


@endsection