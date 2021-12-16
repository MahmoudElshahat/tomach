

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
      <h2>LOGIN</h2>
      <form action="{{route('user_get_login')}}" Method="post">
        @csrf
        <div class="inputBox">
          <input type="text" name="phone" value='+' required=""/>
          <label>phone</label>

          @if($errors->has('phone'))
                  <div class="error alert-danger">{{ $errors->first('phone') }}</div>
            @endif

        </div>
        <div class="inputBox">
          <input type="password" name="password" required=""/>
          <label>Password</label>

          @if($errors->has('password'))
                  <div class="error alert-danger">{{ $errors->first('password') }}</div>
            @endif

        </div>



        <input type="submit" name="" value="Submit">

      </form>
            <h2>OR</h2>
      <div id="signup" class="inputBox">
        <h4><a style="color:aliceblue" href="{{route('user.signup')}}">Create NEw Acount</a></h4>
      </div>
   </div>



    </section>
@endsection
