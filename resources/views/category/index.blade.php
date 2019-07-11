@extends('master')

@section('main')

  <div class="navbar">
    <a class ="navbar-category" href="#">Categories</a>
    <ul class="nav navbar-nav">
      <!--crear CSS para este nav bar-->
      @if(!empty($categories))
        @forelse($categories as $category)
          <li>
            <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
          </li>
        @empty
          <li>No data</li>
        @endforelse
      @endif

    </ul>

    <!--Mas adelante podemos crear un formulario tipo ADMIN para agregar categories y/o productos nuevos -->
  </div>

  @if(!empty($products))
    <section>
      <h3>Products</h3>

      @forelse($products as $product)
        <p>{{$product->name}}</p>
      @empty
        <p>No data</p>
      @endforelse
    </section>
  @endif

@endsection
