@extends('carros.layout')
  
@section('content')
<div class="form-group "> 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('carros.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

</div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome do carro:</strong>
                {{ $carro->nome }}
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marca:</strong>
                {{ $carro->marca }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">    
        <div class="form-group" > 
            <strong>Usado:</strong>
            {{ $carro->usado }}
           </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Km:</strong>
               {{ $carro->km }}
            </div>
            
            <div class="form-group">
                <div class="input-group mb-3" >
                <strong>Imagem:</strong>
            </div>
            <img src="{{ url("img/{$carro->imagem}") }}">
              </div>
           
        </div>
   
   
@endsection