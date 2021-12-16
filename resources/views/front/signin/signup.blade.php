

@extends('layouts.userlogin')
{{-- @section('title','الدخول') --}}
@section('content')

    <!-- <ul>
      <li><a href="home page.html">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">services</a></li>
      <li><a href="#">pictures</a></li>
      <li><a href="#">Videos</a></li>
      <li><a href="#">music</a></li>
      <li><a href="#">Contact us</a></li>
    </ul> -->
    <div class="box">
      <h2>Sign UP</h2>
{{-- ======================= --}}
    <div class="alert alert-danger" id="error" style="display: none;"></div>
      <div class="alert alert-success" id="successAuth" style="display: none;"></div>

      <form action="{{route('insert.user')}}" Method="post">
      {{-- <form id="user-up"action="" Method="post"> --}}

        @csrf

        <input type="numder" name='active' value=0 hidden />

        <div class="inputBox">
          <input type="text" name="name" required=""/>
          <label>Name</label>

          @if($errors->has('name'))
            <div class="error alert-danger">{{ $errors->first('name') }}</div>
         @endif


        </div>

        <div class="inputBox">  {{--phone--}}
            <input type="text" id="number" value='+' name="phone" required/>
            <label>Mobile</label>

            @if($errors->has('phone'))
                  <div class="error alert-danger">{{ $errors->first('phone') }}</div>
            @endif
        </div>

        <div class="inputBox">
            <input type="password" name="password" required/>
            <label>Password</label>

            @if($errors->has('password'))
            <div class="error alert-danger">{{ $errors->first('password') }}</div>
         @endif

          </div>

        <div class="inputBox">
            <input type="text" name="adress" required/>
            <label>Adress</label>

            @if($errors->has('adress'))
                  <div class="error alert-danger">{{ $errors->first('adress') }}</div>
            @endif

                <input id="submit" style="margin:auto;" type="submit" name="Verify code" value="Submit">
                {{-- <input id="submit" onclick="store_cookie('#user-up')" style="margin:auto;" type="submit" name="Verify code" value="Submit"> --}}


        </div>




        {{-- <input type="submit" id="submit" style="margin:auto;" type="submit" name="" value="Submit" hidden> --}}

      </form>
   </div>

    </section>
@endsection
