@extends('master')

@section('title')
Products Jirafa Brew House
@endsection

<!--Aca esta el section main de products-->


@section('main')
<main>
  @foreach($categories_list as $cat)
    <a style="font-size:80px;" href="{{ request()->has('categories') ? request()->fullUrl() . ',' . $cat->id : 'products?categories=' . $cat->id }}">
      {{ $cat->name }}
    </a>
  @endforeach
    <a style="font-size:80px;"  href="/products">Reset</a>

    <div id="contenido">
        <section class="section-estilos" id="section-estilos">
            <h1 class="title-princ">Nuestros Productos</h1>

@foreach ($categories as $category)
            @foreach ($category->products as $product)
            <article class="estilo">
                <div class="beer-thumbnail">
                    <img src="/storage/product/{{$product->beer_img}}" alt="cerveza">
                </div>
                <div class="beer-info">
                    <h2>{{$product->name}}</h2>
                    <!--<p>{{$product->description}}</p>-->-->
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
