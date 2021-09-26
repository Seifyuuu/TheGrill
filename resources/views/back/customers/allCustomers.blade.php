@extends("back.partials.html")

@section("content")    
<br>  
<h1 style="text-align: center">Customers</h1>
<div style="display: flex; justify-content:center; flex-direction:wrap;" class="w-100">
<a class="btn btn-success" href="{{route("customer.create")}}">Create</a>
</div>
<br>
<div style="display: flex; justify-content:center; flex-direction:wrap;" class="w-100">
@foreach ($customers as $item )
    <div class="card w-50">
        <br>    
        {{-- <span>- <b>Photo</b> : </span><img src="{{asset("$item->photo")}}" alt=""> --}}
        @if (Storage::disk('public')->exists('img/' . $item->photo))
        <img style="width: 40px" src="{{ asset('img/' . $item->photo) }}" alt="">
         @else
        <img style="width: 40px" src="{{ asset($item->photo) }}" alt="">
        @endif
        <br>
        <span>- <b>Name</b> : <i>{{$item->name}}</i></span>
        <br>
        <span>- <b>Text</b> : <i>{{$item->text}}</i></span>
        <br>
        <span>- <b>Rating</b> : <i>{{$item->rating}}/5</i></span>
        <br>
        <div style="display: flex; justify-content:center; flex-direction:wrap;"    >
        <a class="btn btn-info" href="{{route("customer.edit", $item->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route("customer.destroy", $item->id)}}">Delete</a>
        </div>
        <br>
    </div>
@endforeach
</div>



@endsection