@extends('layout.header')

@section('title','تفاصيل السيارة')

@section('header')

@section('content')
<body id="content1">
    @forelse ($deta as $Details)
    <div id="con">
            <img class="image" src="{{asset('img/toy.png')}}" alt="">
            <h3 class="head">Name : {{$Details->name}}</h3>
            <hr>
            <h4 class="head">Model : {{$Details->model}}</h4>
            <hr>
            <p class="head"><strong>Discription :</strong> {{$Details->discription}}</p>
            <hr>
    </div>
    @empty
        <h3 class="hide">Nothing here yet</h3>

    @endforelse
</body>
@endsection

