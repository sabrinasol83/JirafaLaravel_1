@extends('master')

@section('title')
Products Jirafa Brew House
@endsection

<!--Aca esta el section main de products-->


@section('main')
<main>
      <section class="category">
        <h2>Filtrar por estilo...</h2>
        <div class="category-query">
  @foreach($categories_list as $cat)
    <a href="{{ request()->has('categories') ? request()->fullUrl() . ',' . $cat->id : 'products?categories=' . $cat->id }}">
      <button type="button" class="btn-category">{{ $cat->name }}</button>
    </a>
  @endforeach
    <a href="/products"> <button type="button" class="btn-category"><i class="far fa-times-circle"></i> Reset Filtro</button></a>
  </div>
    </section>
    <div id="contenido">
        <section class="section-estilos" id="section-estilos">
            <h1 class="title-princ">Nuestros Productos</h1>

@foreach ($categories as $category)
            @foreach ($category->products as $product)
            <article class="estilo">
                <div class="beer-thumbnail">
                    <a href="/product/{{$product->id}}"><img src="/storage/product/{{$product->beer_img}}" alt="cerveza"></a>
                </div>
                <div class="beer-info">
                    <a href="/product/{{$product->id}}"><h2>{{$product->name}}</h2></a>
                    <!--<p>{{$product->description}}</p>-->
                    <h4 class="price">{{$product->price}}</h4>
                </div>
                <div class="beer-info">
                    <a href="/product/{{$product->id}}"><button type="button" class="btn-products">Ver más</button></a>
                </div>
            </article>
            @endforeach
            @endforeach
        </section>
    </div>
</main>
@endsection
