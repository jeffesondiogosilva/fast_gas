@include('layouts.app')

<div class="col-md-6">

    <a href="{{ route('product.create') }}" class="btn-secondary rounded p-1">Criar Produto</a>

</div>

<div class="col-md-12">   
    
    <table>
        <thead>
            <th class="col-md-6">Nome</th>
            <th class="col-md-3">Preço</th>
            <th class="col-md-3">Quantidade</th>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>