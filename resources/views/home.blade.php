@extends('master')

@section('title')
  Jirafa Brew House
@endsection

<!--Aca esta el section main de home-->

@section('main')
<script src="js/main.js"></script>

<div class="overlay overlay--light" data-action-scope="_actionscope_27">
 <div class="overlay-dialog overlay-dialog--extended overlay-dialog--animate js-overlayDialog" tabindex="-1">
   <div class="overlay-content">
     <section class="uiScale uiScale-ui--regular uiScale-caption--regular u-backgroundColorWhite u-backgroundNoRepeat u-flexColumn u-height550 u-width900 u-borderBox u-borderRadius4 u-boxShadow2px10pxBlackLighter u-textAlignCenter u-padding50 u-xs-padding40 u-overflowHidden u-relative u-margin5 u-sm-width600 u-sm-heightAuto u-sm-backgroundImageNone u-xs-sizeFullWidth u-xs-absolute u-xs-top50pct u-xs-left50pct u-xs-transformXYNegative50pct u-xs-width95Pct u-xs-margin0" style="background-image: url(); background-size: 100%;
     margin: 0 auto; position: fixed; top: 30vh; left: 14vw; width: 70vw;">
       <div class="btn-close">
       </div>
           <h1 class="ui-brand2 u-width100pct u-maxWidth450 u-marginAuto u-marginBottom20 js-susiTitle">Confirmanos!</h1>
           <h2 class="ui-body u-width100pct u-maxWidth360 u-marginAuto u-marginBottom25 js-susiSubtitle">Antes de continuar con la visita a nuestra web, necesitamos saber si sos mayor de edad.</h2>
           <div class="u-width100pct u-maxWidth300 u-marginAuto u-xs-widthAuto js-loginOptions">
             <a href="#" id="yes">
               <span class="button-label">Si</span>
             </a>
             <a href="https://www.google.com" id="no">
               <span class="button-label">No</span>
             </a>
           </div>

       </div>
     </section>
   </div>
 </div>
</div>


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
