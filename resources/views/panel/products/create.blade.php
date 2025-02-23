@include('layouts.app')

<div>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Nome">

        <label for="price">Preço</label>
        <input type="text" name="price" id="price" placeholder="Preço">
        
        <label for="quantity">Quantidade</label>
        <input type="text" name="quantity" id="quantity" placeholder="Quantidade">

        <button type="submit">Salvar</button>
    </form>

</div>

<div class="pt-3">
    <a href="{{ route('product.index')  }}" class="btn-primary rounded p-1">Lista de Produtos</a>
</div>