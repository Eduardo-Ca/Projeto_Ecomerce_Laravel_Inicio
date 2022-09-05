@extends('layouts.app')

@section('title', 'GShop - Ecommerce')

@section('content')
<div class="row">
    <div class="col-2 p-5">
        @if(isset($listaCategoria) && count($listaCategoria) > 0)
            <ul class="list-group">
                @foreach($listaCategoria as $cat)
                    <a href="{{ route('categoria_por_id' , ['idcategoria' => $cat->id]) }}" class="list-group-item list-group-item-action"> {{ $cat->categoria }}</a>
                @endforeach
            </ul>
        @endif
    </div>
    

    <div class="col-10 ">
        @include("layouts._produtos" , [ 'lista' => $lista ])
    </div>
</div>
@endsection