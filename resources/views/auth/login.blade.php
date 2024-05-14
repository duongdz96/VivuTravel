@extends('layouts.app')

@section('content')

<div class="reservation-form">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <form id="reservation-form" method="POST" role="search" action="{{route('login')}}">
          @csrf
          <div class="row">
            <div class="col-lg-12">
              <h4>Đăng nhập</h4>
            </div>
            <div class="col-md-12">
              <fieldset>
                <label for="Name" class="form-label">Email của bạn</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
              </fieldset>
            </div>


            <div class="col-md-12">
              <fieldset>
                <label for="Name" class="form-label">Mật khẩu</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="current-password">

                @error('password')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
        @enderror
              </fieldset>

            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" class="main-button">Đăng nhập</button>

              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection