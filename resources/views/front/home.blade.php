@extends('layouts.site')

@section('content')
 <!--
Body Section
-->


    <section class="d-flex justify-content-center" style="overflow: hidden; padding-top: 8%;" >
        <div id="fade" style="width:99%;">
            <div><img style="width:100%;" src="./public/assets/front/images/1920x800_1_1.jpg" alt=""></div>
            <div><img style="width:100%;" src="./public/assets/front/images/1920x800_3.jpg" alt=""></div>
            <div><img style="width:100%;" src="./public/assets/front/images/1920x800_4_4.jpg" alt=""></div>
            <div><img style="width:100%;" src="./public/assets/front/images/insta_1920x800_1.jpg" alt=""></div>

        </div>
    </section>

    {{-- ============section 1============ --}}
    @foreach ($users['items'] as $item)

     <section class="d-flex justify-content-center">


        <div class="row d-flex">
            <div class="col-6 d-flex justify-content-end" style="padding: 0;">
                <a href="#" onclick="ajax_query('{{route('add.cart',$item-> id)}}')" class="d-flex justify-content-center"><img style="    width: 100%;" src="{{config('constans.images_path').$item->photo}}" alt="">

                </a>
            </div>
            <div class="col-6" style="padding: 0;"><a href="{{route('add.cart',$item-> id)}}"><img style="    width: 100%;"  src="{{config('constans.images_path').$item->photo}}" alt=""></a></div>
        </div>

    </section>


    {{-- ===========section 2============ --}}

     <section class="d-flex justify-content-center">
    <v-row class="d-flex justify-content-center">
      <v-col>
        <a href="{{route('add.cart',$item-> id)}}" ><img style="width:100%;"  src="{{config('constans.images_path').$item->photo}}" alt=""></a>
      </v-col>
      <v-col>
        <a href="{{route('add.cart',$item-> id)}}" ><img style="width:100%;"  src="{{config('constans.images_path').$item->photo}}" alt=""></a>
      </v-col>
      <v-col>
        <a href="{{route('add.cart',$item-> id)}}" ><img style="width:100%;"  src="{{config('constans.images_path').$item->photo}}" alt=""></a>
      </v-col>
      <v-col>
        <a href="{{route('add.cart',$item-> id)}}" ><img style="width:100%;"  src="{{config('constans.images_path').$item->photo}}" alt=""></a>
      </v-col>
    </v-row>
    </section>
    @endforeach
{{-- ==================== o hac --}}
    <section class="about">
      <div class="container d-flex justify-content-center align-items-center">
        <div style="width: 60%;">
          <h3>О нас</h3>
          <p>Too much sushi – это современный сервис доставки традиционных японских блюд, который в прямом смысле слова too much во всем! Мы предлагаем:
            – блюда из продуктов премиального качества;
            – порции большего размера, где рыбы и даров моря всегда много;
            – удобную и экологически чистую упаковку, которую легко переработать, не нанося вред окружающей среде;
            – многолетний опыт работы, позволяющий мастерски сочетать вкусы;
            – демократичные цены, потому что каждый должен иметь возможность попробовать наши суши!</p>
        </div>
        <img style="width: 30%;" src="./public/assets/front/images/2one.gif" alt="">
      </div>
    </section>
    <section class="contact">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-3 d-flex flex-column text-center">
          <h2>Контакты</h2>
          <p>
            Телефон: <a href="">8 (495) 149-49-88</a><br/>
            What’sApp: <a href="">+7 (994) 777-1013</a><br/>
            E-mail: toomuchsushi@yandex.ru<br/>
            Время работы: с 11:00 до 22:45<br/>
            {{-- <a href="{{route('add.cart',$item->id)}}">Посмотреть зоны доставки</a> --}}
          </p>
          <div>
            <div class="btn"><i class="fab fa-facebook-f"></i></div>
            <div class="btn"><i class="fab fa-instagram"></i></div>
        </div>
        </div>
      </div>
    </div>
    </section>
    {{--======= footer ===== --}}
@endsection
