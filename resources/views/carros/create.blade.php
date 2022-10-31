@extends('carros.layout')
  
@section('content')
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('carros.index') }}"> Voltar</a>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2></h2>
        </div>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Falta preencher alguns campos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('carros.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Nome do carro:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome do carro">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Marca:</strong>
                <input type="text" name="marca" class="form-control" placeholder="Marca">
            </div>
        </div>
        
        <div class="form-group">
            <strong>Usado</strong>
        <div class="input-group mb-3"  > 
            <select class="form-select" id="inputGroupSelect01" name="usado">
              <option selected></option>
              <option >Sim</option>
              <option >Não</option>
            </select>
        </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Km:</strong>
                <input type="text" name="km" class="form-control" placeholder="Km">
            </div>
        </div>
                        
        <div class="form-group mb-3">
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <strong class="form-group">Imagem:</strong>
        </div>
        <input type="file" class="form-control" name="imagem">
          </div>
          
          <div class="form-group ">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center ">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            
    </div>
</div>
   
</form>
@endsection