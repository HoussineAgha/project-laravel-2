@extends('layout.header')

@section('title','سيارات الشركة')

@section('header')

@section('content')

<body id="content">

    <div id="con" class="container">
            <div class="row">
                <div class="col-4">
                    @foreach ($carss as $car)
                    <div class="card" style="width: 18rem;">
                            <img src="{{asset('img/toy.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{$car->name}}</h5>
                            <p class="card-text">{{$car->discription}}</p>
                            <a href="{{route('deta',$car->id)}}" class="btn btn-primary">View car</a>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>

</body>

@endsection
