@include('layouts.app')

<div class="col-md-12 text-center">
    <h1>Lista de Produtos</h1>
</div>

<div class="col-md-12 text-right">

    <a href="{{ route('product.create') }}" class="btn-secondary rounded p-1">Criar Produto</a>

</div>

<div class="col-md-12">   
    
    <table class="col-md-12 pt-3 mt-3 border bg-secondary text-light">
        <thead>
            <th class="col-md-6 text-left pl-2">Nome</th>
            <th class="col-md-3 text-center">Preço</th>
            <th class="col-md-3 text-center">Quantidade</th>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="text-left pl-2">{{ $product->name }}</td>
                    <td class="text-center">{{ $product->price }}</td>
                    <td class="text-center">{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>