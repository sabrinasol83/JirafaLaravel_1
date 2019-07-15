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
              <video class="background-video" poster="http://adnhd.com/wp-content/uploads/2018/10/0029462316.jpg" src="IMG/Loop-Background.mp4" autoplay loop muted></video>
              <div class="landing">
                  <img class="logo-landing-img" src="IMG\jirafa-brew-house-logo.png" alt="jirafa-logo">
              </div>
          </div>
      </section>

     <section id="section-nosotros">
          <div class="nosotros">
              <h1 class="title-princ">Nosotros</h1>
              <p class="paragraph-us">¡Hablemos de cervezas! Somos una cervecería que hace <i>cerveza de garage</i>, ¿Qué significa esto? Somos un emprendimiento de dos amigos que les gusta el mundo de la cerveza, tenemos nuestra fábrica en nuestro garage.. y muchas ganas de aprender. Las recetas de todas nuestras birras se encuentran en linea. ¿Estas comenzando y tenes dudas? <a style="color:#ffbb37" href="#section-contact">No dudes en contactarnos</a></p>
          </div>
    </section>

      <!-- categorias o estilos de cerveza -->
      <section class="section-estilos" id="section-estilos">
        <h1 class="title-princ">Productos</h1>
          <article class="estilo">
            <div class="photo-container">
                <a href="/products?categories=1"><img class="photo" src="IMG/estilo-rubia.jpg" alt="rubia"></a>
            </div>
            <div class="title">
                <a href="/products?categories=1"><h1>Rubia</h1></a>
                <p class="title">IPA's o Blonde, muy suaves o muy power.</p>
            </div>
          </article>
          <article class="estilo">
            <div class="photo-container">
              <a href="/products?categories=3"><img class="photo" src="IMG/estilo-negra.jpg" alt="negra"></a>
            </div>
            <div class="title">
                <h1>Negra</h1>
                <a href="/products?categories=3"><p class="title">Stout, porter, mucho aroma y sabor.</p></a>
            </div>
          </article>
          <article class="estilo">
            <div class="photo-container">
              <a href="/products?categories=2"><img class="photo" src="IMG/estilo-roja.jpg" alt="roja"></a>
            </div>
            <div class="title">
                <a href="/products?categories=2"><h1>Roja</h1></a>
                <p class="title">Cervezas maltosas, agradables al paladar</p>
            </div>
          </article>
          <article class="estilo">
            <div class="photo-container">
              <a href="/products?categories=4"><img class="photo" src="IMG/estilo-reserva.jpg" alt="estilo 04"></a>
            </div>
            <div class="title">
                <a href="/products?categories=4"><h1>Reserva</h1></a>
                <p class="title">Cervezas doradas reserva en barriles de whisky.</p>
            </div>
          </article>
      </section>

      </div>
    </main>

@endsection

<!--Aca esta el section content de home-->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
