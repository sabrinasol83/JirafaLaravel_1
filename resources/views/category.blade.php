@extends('master')

@section('title')
Jirafa Brew House
@endsection

<!--Aca esta el section main de home-->

@section('main')

<main>
    <div id="contenido">
        <section class="landing" id="home">
            <div class="bloque-home">
                <img class="background-image" src="IMG\madera-rustica.jpg">
                <div class="landing">
                    <img class="landing-img" src="IMG\rubia-landing.png" alt="cerveza-rubia-landing">
                </div>
            </div>
        </section>

        <!-- SECTION CON PRODUCTOS, BRANCH ISSUE-7 VA ACA -->
        <section class="productos">
            <h1>RUBIA</h1>

                  @foreach ($categories as $category)
                  <article class="">
                    <h2>{{$category->name}}</h2>
                    <p>{{$category->description}}</p>
                    <a href="/category/{{$category->id}}">Ver más</a>
                  </article>
                  @endforeach
        </section>
    </div>
</main>

@endsection
