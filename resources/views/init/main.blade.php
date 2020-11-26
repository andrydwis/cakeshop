@extends('layouts.app')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="hero align-items-center hero-bg-image text-white hero-bg-image" 
            style="background-image: url(https://images.unsplash.com/photo-1530751127259-074b0cdc0469?ixlib=rb-1.2.1&auto=format&fit=crop&w=1001&q=80)">
                <div class="hero-inner text-center">
                    <h1 class="h1">Lely Cake</h1>
                    <p class="lead">"Ada cerita di setiap potongnya"</p>
                    <div class="mt-3">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-stretch">
        <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center">
            <img src="{{asset('assets/img/world.svg')}}" alt="" class="img-fluid d-none d-md-block">
        </div>
        <div class="col-12 col-md-8 col-lg-8">
            <div class="h-100 d-flex align-items-center">
                <div class="text-center text-md-left my-3">
                    <h3 class="h3 font-weight-bold">What is LelyCake ?</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, ad?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection