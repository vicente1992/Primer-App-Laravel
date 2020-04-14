@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-10 col-lg-6 mx-auto">
    
    

    @include('partials.validation-errors')

<form class="bg-white py-3 px-4 shadow rounded"
method="POST" action="{{route('projects.update', $project)}}">
<h1>Editar proyecto</h1>
   @method('PATCH')

  @include('projects._form', ['btnText' =>'Editar'])


 
</form>
</div>
</div>
</div>
   
@endsection