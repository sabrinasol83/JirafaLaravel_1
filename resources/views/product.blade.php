@extends('master')

@section('title')
  Jirafa Product
  @endsection



@section('main')
  <main>
    <div id="contenido">
      <h1 class="title-princ"> {{$product->name}}</h1> <!Detalle del producto elegido-->
          <article class="">
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        <a href="/product/{{$product->id}}/addtocart">Cargar al carrito</a>
        <p><img src="/storage/app/public/product/{{$product->id}}" alt=""></p>
      </article>
    </div>
  </main>
@endsection

