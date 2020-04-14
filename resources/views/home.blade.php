@extends('layout')
@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">   
             
        <div class="col-12 col-lg-6 my-auto">
           
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="p lead text-secondary">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis vero eaque consectetur totam tempora quo excepturi. Sit sapiente illum deleniti tempore, cum aut assumenda temporibus ducimus, voluptate id totam dicta?
            </p>
        <a class="btn btn-lg btn-block btn-primary" href="{{route('contacto')}}">Contáctame</a>
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('projects.index')}}">Portafolio</a>
        </div>

        <div class="col-12 col-lg-6 my-auto">
            <img class="img-fluid" src="/img/home.svg" alt="Desarrolo web">
     </div>
    </div>

</div>
  
@endsection