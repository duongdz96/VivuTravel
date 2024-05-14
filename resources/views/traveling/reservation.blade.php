@extends('layouts.app')

@section('content')

<div class="second-page-heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Đặt chuyến đi tại đây</h4>
                <h2>Đặt chuyến đi cuả bạn</h2>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uttersi labore et
          dolore magna aliqua is ipsum suspendisse ultrices gravida</p> -->
                <!-- <div class="main-button"><a href="about.html">Discover More</a></div> -->
            </div>
        </div>
    </div>
</div>

<div class="more-info reservation-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="info-item">
                    <i class="fa fa-phone"></i>
                    <h4>Hotline</h4>
                    <a href="#">0909051003</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="info-item">
                    <i class="fa fa-envelope"></i>
                    <h4>Liên hệ chúng tôi qua email</h4>
                    <a href="#">levuhoang2003@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="info-item">
                    <i class="fa fa-map-marker"></i>
                    <h4>Văn phòng</h4>
                    <a href="#">165 Cầu Giấy</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="reservation-form">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <form id="reservation-form" name="gs" method="POST" role="search"
                    action="{{route('traveling.reservation.store', $city->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Thông tin đặt tour </h4>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Name" class="form-label">Họ tên người đặt</label>
                                <input type="text" name="name" class="Name" placeholder="Nguyễn Văn A" autocomplete="on"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Số điện thoại</label>
                                <input type="text" name="phone_number" class="Number" placeholder="098xxxxxxx"
                                    autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="chooseGuests" class="form-label">Số người</label>
                                <select name="num_guests" class="form-select" aria-label="Default select example"
                                    id="chooseGuests" onChange="this.form.click()">
                                    <option selected>1</option>
                                    <option type="checkbox" name="option1" value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4">5</option>
                                    <option value="4">6</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <label for="Number" class="form-label">Ngày đi</label>
                                <input type="date" name="check_in_date" class="date" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <!-- <label for="chooseDestination" class="form-label">Choose Your Destination</label> -->
                                <input type="hidden" value="{{$city->name}}" name="destination" class="Name" required>
                            </fieldset>
                        </div>

                        <div class="col-lg-12">

                            @if (isset(Auth::user()->id))

                                <fieldset>
                                    <!-- <label for="chooseDestination" class="form-label">user id</label> -->
                                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id" class="Name" required>
                                </fieldset>
                            @endif
                        </div>

                        <div class="col-lg-12">
                            <fieldset>
                                @if (isset(Auth::user()->id))
                                    <button type="submit" class="main-button">Đặt ngay</button>
                                @else
                                    <p class="alert alert-success">Đăng nhập để đặt tour</p>
                                @endif
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection