@extends('layouts.site')

@section('content')

    <div class="row">
      <div class="col bg">
          <div style="width: 100%; height: 100%; background: rgba(40, 40, 40, 0.59);">
            <h1 style="
          color: white;
          height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          ">
          Корзина</h1>
          </div>
        </div>
    </div> -->
    <div class="row d-flex justify-content-center my-5">
            <div class="col-11">
                <div class="d-flex align-items-center justify-content-between px-3  " style="padding: 22px 45px 20px 20px; background: rgba(254, 93, 93, 0.15);">
                    <p class="m-0">Минимальная сумма заказа составляет 1499. Пожалуйста, закажите что-нибудь ещё.</p>
                    <a href=""><i class="fas fa-times"></i></a>
                </div>
            </div>
    </div>
    <div class="row ">

        @foreach($cart_data['items'] as $item)


      <div class="col d-flex flex-column text-center">
        <i style="font-size: 200px;"></i>
        <img src="">
         <h3>{{$item-> name }}</h3>
        <p>{{$item-> description}}</p>




        <h4>$ {{$item-> price}}</h4>

        <form action="{{route('update.cart',$item-> id)}}" Method="POST" id="cart_quntity">
            @csrf

           <h6>

            <input type="number" name="quntity" placeholder="cahnge Quntity"  style="width:15em;margin:auto;color:blue" size="4" min="1" class="input-text qty text" title="Qty" value=""  step="1">

            <span>{{App\Models\cart::quntity($item-> id)}}</span>

          </h6>
           
            <input type="submit" value="update Cart">
        </form>

      </div>
      @endforeach

    </div>
   @stop
