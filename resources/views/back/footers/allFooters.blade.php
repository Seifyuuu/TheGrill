@extends("back.partials.html")

@section("content")    
<footer class="container-fluid d-flex justify-content-center align-items-center border border-warning vh-100">
    @foreach ($footers as $footer )
<div class="card h-50 w-50 " style="width: 18rem;">
  <div class="card-body d-flex flex-column justify-content-evenly align-items-center">
    <h5 class="card-title">texte:</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$footer->copyright}}</h6>
    <p class="card-text">
                        <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s" >
                    @foreach ($footer->sociallinks()->where('footer_id','!=',null)->get() as $link )
                        <li>
                            <a href="{{$link}}"><i class="fab fa-{{$link->icon->name}}"></i></a>
                        </li>
                    @endforeach
                   
                </ul>
    </p>
    <div class="d-flex justify-content-center">
                <a href="{{route('footer.edit',$footer->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
                <form action="{{route('footer.destroy',$footer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger  "><i class="fas fa-trash-alt"></i></button>
                </form>
        </div>
  </div>
</div>


 
    @endforeach
</footer>

<div id="bottom-frame"></div>

<a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

</div>
@endsection