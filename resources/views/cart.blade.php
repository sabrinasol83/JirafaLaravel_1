@extends('master')

@section('main')
<main>
    <div class="content">
        <h1 class="cart"><i class="fas fa-shopping-cart"></i><br> CART</h1>
        <table class="table">
            <tr>
                <th><i class="fas fa-shopping-bag"></i></th>
                <!--<th>ID</th>-->
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>CANT</th>
                <th>TOTAL</th>
                <!--TOTAL (cantidad * precio) -->
                <th></th>
            </tr>

            <tr>
                @forelse ($cart as $items)
                <!--<td>{{$items->id}}</td>-->
                <td><img src="/storage/product/{{$items->beer_img}}" alt=""></td>
                <td>{{$items->name}}</td>
                <td>{{$items->description}}</td>
                <td>{{$items->price}}</td>
                <td>{{$items->cant}}</td>
                <td>{{$items->price * $items->cant}}</td>
                <td>
                    <form class="" action="/cart/{{$items->id}}" method="post">
                        @csrf
                        <button class="btn-eliminar" type="submit"><i class="far fa-times-circle"></i></button>
                    </form>
                </td>
            </tr>


            @empty
            <div>
                <p class="checkout-msg">Su carrito está vacío</p>
            </div>
            @endforelse
        </table>
        <div class="cart-checkout">
            <h2 class="cart-checkout"><b>TOTAL</b> AR$ {{$total}}</h2>

            @if ($cart->isNotEmpty())

            <button type="button" class="btn-products"><a href="/cart/close">COMPRAR <i class="fas fa-beer"></i></a></button>
        </div>
        @endif
    </div>
    </div>
</main>
@endsection
