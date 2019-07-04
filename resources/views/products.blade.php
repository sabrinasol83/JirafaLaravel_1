@extends('master')

@section('title')
  Products Jirafa Brew House
@endsection

<!--Aca esta el section main de products-->


@section('main')
  <main>
    <div id="contenido">

      <h1 class="title-princ">Nuestros Productos</h1>


      @foreach ($products as $product)
      <article class="">
        <h2>{{$product->name}}</h2>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        <p><img src="/storage/app/public/product/{{$product->beer_img}}" alt="cerveza"></p>
        <a href="/product/{{$product->id}}">Ver más</a>
      </article>
      @endforeach

    </div>
  </main>
@endsection
