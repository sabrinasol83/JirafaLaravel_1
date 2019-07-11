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
                <p class="product-price">{{$product->price}}</p>
                <a href="/product/{{$product->id}}/addtocart"><button class="btn-products">Cargar al carrito</button></a>
                <img src="/storage/app/public/product/{{$product->id}}" alt="">
            </article>
        </section>
        </div>
</main>
@endsection

<tbody>

</tbody>
