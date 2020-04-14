@extends('layout')

@section('title', 'Contacto')

@section('content')

<div class="container p-4">
    <div class="row">
    <div class="col-md-12 col-sm-10 col-lg-6 mx-auto">        
    
<form class="bg-white shadow rounded py-3 px-4"
  method="POST" action="{{route('messages.store')}}">
    @csrf
    <h2 class="display-5 ">@lang('Contact')</h2> 
    <hr>

<div class="form-group"> 
    <label for="name">Nombre</label>

<input class="form-control bg-light shadow-sm @error('nombre') is-invalid @else  border-0  @enderror "
type="text" name="nombre" id="name"
 placeholder="Nombre.."
  value="{{old('nombre')}}">
    @error('nombre')
  <span class="invalid-feedback" role="alert">

  <strong>{{$message}}</strong>
  </span>

  @enderror 
     
    </div>
    <div class="form-group"> 
        <label for="email">Email</label>
        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else  border-0  @enderror "
         type="email" name="email" id="email" placeholder="Email.." value="{{old('email')}}">
         @error('email')
         <span class="invalid-feedback" role="alert">       
         <strong>{{$message}}</strong>
         </span>       
         @enderror 
    </div>
    <div class="form-group"> 
        <label for="subject">Asunto</label>
        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else  border-0  @enderror "
         type="text" name="subject" id="subject" placeholder="Asunto.." value="{{old('subject')}}">
         @error('subject')              
        <span class="invalid-feedback" role="alert">       
        <strong>{{$message}}</strong>
        </span>       
        @enderror
    </div>
    <div class="form-group"> 
        <label for="content">Mensaje</label>
        <textarea
        class="form-control bg-light shadow-sm @error('content') is-invalid @else  border-0  @enderror "
         name="content" id="content" placeholder="Mensaje..." >{{old('content')}}</textarea><br>
         @error('content')              
         <span class="invalid-feedback" role="alert">       
         <strong>{{$message}}</strong>
         </span>       
         @enderror
    </div>

        <button class="btn btn-primary btn-lg btn-block">Enviar</button>
    </form>


</div>
</div>
</div>
@endsection