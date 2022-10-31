{{-- @extends('carros.layout')  --}}
@extends('layouts.app') 

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Carros cadastrados</h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-success" href="{{ route('carros.create') }}"> Cadastrar um carro novo</a>
            </div>
        </div>
        
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nome do carro</th>
            <th>Marca</th>
            <th>Usado</th>
            <th>Km</th>
            <th>Imagem do veículo</th>

            <th width="260px">Ações</th>
        </tr>
        @foreach ($carros as $carro)
        <tr>
            
            <td>{{ $carro->nome }}</td>
            <td>{{ $carro->marca }}</td>
            <td>{{ $carro->usado }}</td>
            <td>{{ $carro->km }}</td>
            <td ><img src="{{ url("img/{$carro->imagem}") }}"  width="200" height="140"></td> 

            <td>
                <form action="{{ route('carros.destroy',$carro->id) }}" method="POST" id="btndeletar" >
   
                    <a class="btn btn-info" href="{{ route('carros.show',$carro->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('carros.edit',$carro->id) }} " >Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    {{-- <button type="submit" class="btn btn-danger">Deletar</button> --}}
                    <button type="button" class="btn btn-danger" onclick="confirmar()">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $carros->links() !!}
      
@endsection