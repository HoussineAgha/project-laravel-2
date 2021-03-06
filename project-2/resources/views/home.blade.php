@extends('layout.header')

@section('title','الرئيسية')

@section('header')

@section('content')

@component('components.alert',['title'=> 'we are use cookies :','statue'=>'primary'])
To support your experience on the website.
@endcomponent

<body id="content">
    <p class="p1"> @lang('translation.view')</p>
    @forelse ($companys as $company)

        <div id="card" class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset('img/toy.png')}}" alt="..." width="200px" height="200px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title"><strong>{{$company->name}}</strong></h5>
                <p class="card-text">{{$company->discription}}</p>

                    <a href= "{{route('cars',$company->id)}}" class="btn btn-primary" >@lang('translation.btn')</a>

                </div>
            </div>
            </div>
        </div>
        @empty
            nothing Now
        @endforelse

</body>
@endsection

