@extends('master')

@section('title')
Jirafa Product
@endsection



@section('main')
<main>
    <div id="contenido">
        <div class="bloque-home">
            <img class="background-image" src="\IMG\madera-rustica.jpg">
            <div class="product-img">
                <img class="product-img" src="/storage/product/{{$product->beer_img}}" alt="cerveza">
            </div>
        </div>
        <!--Detalle del producto elegido-->
        <section>
            <article>

                <h1 class="product-title"> {{$product->name}}</h1>

                <p class="product-info">{{$product->description}}</p>
                <p class="product-price">AR$ {{$product->price}}</p>
                <div class="beer-info">
                    <a href="/product/{{$product->id}}/addtocart"><button class="btn-products"><i class="fas fa-cart-plus"></i> Cargar</button></a>
                    <img src="/storage/app/public/product/{{$product->id}}" alt="">
                </div>
            </article>
        </section>
    </div>
</main>
@endsection

<tbody>

</tbody>
