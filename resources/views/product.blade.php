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
                <div class="product-info">
                    <p><span style="font-weight: bold;">ABV</span>: {{$product->abv}}% &nbsp; <span style="font-weight: bold;">IBU</span>: {{$product->ibu}}</p>
                </div>

                <p class="product-info">{{$product->description}}</p>
                <p class="product-price">AR$ {{$product->price}}</p>
                <div class="beer-info">

                    <form action="/product/{{$product->id}}/addtocart" method="POST">
                        {{ csrf_field() }}
                        <label for="cant">
                            <input type="number" value="1" name="cant" id="cant">
                        </label>
                        <div class="beer-info">
                            <input class"product-qty" type="hidden" name="id" value="{{$product->id}}">
                        </div>
                        <button type="submit" class="btn-products"><i class="fas fa-cart-plus"></i> Cargar</button>
                        <img src="/storage/app/public/product/{{$product->id}}" alt="">
                    </form>

                </div>
            </article>
        </section>
    </div>
</main>
@endsection

<tbody>

</tbody>
