@extends("back.partials.html")

@section("content")    
<h1 style="text-align: center">Users</h1>

<div style="display: flex; justify-content:center; flex-direction:wrap;" class="w-100">
    @foreach ($users as $item )
        <div class="card w-50">
            <br>    
            <span>- <b>Name</b> : <i>{{$item->name}}</i></span>
            <br>
            <span>- <b>Email :</b> <i>{{$item->email}}</i></span>
            <br>
            <span>- <b>MDP : </b> <i>{{$item->password}}</i></span>
            <br>
            <span>- <b>Rôle</b> <i>{{$item->name}}</i></span>
            <br>
            <div style="display: flex; justify-content:center; flex-direction:wrap;"    >
            </div>
            <br>
        </div>
    @endforeach
    </div>


@endsection