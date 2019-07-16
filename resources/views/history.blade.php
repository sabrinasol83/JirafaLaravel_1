@extends('master')

@section('main')
<main>
    <div class="content">
        <h1 class="title-princ"> Historial de compras</h1>
        <table class="table">
            <tr>
                <th><i class="fas fa-shopping-bag"></th>
                <th>Enviado el:</th>
                <th>Productos:</th>
            </tr>
            @forelse ($history as $cart)
            <tr>
                <td>{{$cart->first()->cart_number}}</td>
                <td>{{$cart->first()->updated_at}}</td>
                <td>
                    <ul>

                        @foreach ($cart as $item)
                        <li>{{$item->name}}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @empty
            <p>Su historial de compra está vacío</p>
            @endforelse
        </table>



        <!-- VERSION ANTERIOR CON LISTA

        <ul>
          @forelse ($history as $cart)
          <li>
            {{-- Como todos los items tienen el mismo nro de carrito y la misma fecha de compra, con traer el dato del primer items podemos mostrar todos los datos generales de la compra --}}
            Cart id: {{$cart->first()->cart_number}}. Enviado el: {{$cart->first()->updated_at}}
        <ul>
          {{-- Con este detalle vemos el contenido de cada item --}}
          @foreach ($cart as $item)
           <li>Nombre:{{$item->name}}</li>
          @endforeach
        </ul>
        </li>
        @empty
        <p>Su historial de compra está vacío</p>
       @endforelse
     </ul>-->


    </div>
</main>
@endsection
