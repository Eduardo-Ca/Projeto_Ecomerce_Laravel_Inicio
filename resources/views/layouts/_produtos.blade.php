<div class="container p-4">
        <div class="row">
        @if(isset($lista))
            @foreach($lista as $prod)
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset($prod->foto) }}" class="card-img-top"/>
                    <div class="card-body">
                        <h6 class="card-title">{{ $prod->nome }} - R$ {{ $prod->valor }}</h6>
                        <a href="{{ route('adicionar_carrinho',['idproduto' => $prod->id ]) }}" class="btn btn-sm btn-secondary">Adicionar item</a>
                    </div>
                </div>
            </div>
                @endforeach
            @endif
            
        </div>
    </div>