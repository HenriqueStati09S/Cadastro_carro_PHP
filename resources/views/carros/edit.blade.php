@extends('carros.layout')
   
@section('content')
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
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Tem alguns campos faltando.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('carros.update',$carro->id) }}" method="POST" id="btnatualiza" >
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <strong>Nome do carro:</strong>
                    <input type="text" name="nome" class="form-control" value="{{ $carro->nome }}" placeholder="Nome do carro">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <strong>Marca:</strong>
                    <input type="text" name="marca" class="form-control" value="{{ $carro->marca }}" placeholder="Marca">
                </div>
            </div>
            
            <div class="form-group">
                <strong>Usado</strong>
            <div class="input-group mb-3"  > 
                <select class="form-select" id="inputGroupSelect01" value="{{ $carro->usado }}" name="usado">
                  <option selected></option>
                  <option >Sim</option>
                  <option >Não</option>
                </select>
            </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <strong>Km:</strong>
                    <input type="text" name="km" class="form-control" value="{{ $carro->km }}" placeholder="Km">
                </div>               
            </div>

            <div class="form-group mb-3">
                <div class="col-xs-12 col-sm-12 col-md-12" >
                    <strong class="form-group">Imagem:</strong>
            </div>
            <input type="file" class="form-control" name="imagem" value="{{ $carro->km }}">
              </div>
              <div class="form-group mb-3">
              <img src="{{ url("img/{$carro->imagem}") }}"  width="190" height="140">
              </div>  

             
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" > 
            <button type="button" class="btn btn-primary" onclick="atualizar()" >Atualizar</button>
        </div>

        {{-- id="btnatualiza",onclick="atualizar()" --}}
   
    </form>
@endsection