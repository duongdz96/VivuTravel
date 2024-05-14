@extends('layouts.app')

@section('content')
<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4>Nhiêu mức giá hấp dẫn</h4>
        <h2>Khám phá nhiều ưu đãi hơn </h2>
      </div>
    </div>
  </div>
</div>

<div class="search-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form id="search-form" name="gs" method="POST" role="search" action="{{route('traveling.deals.search')}}">
          @csrf
          <div class="row">
            <div class="col-lg-2">
              <h4>Tìm kiếm:</h4>
            </div>
            <div class="col-lg-4">
              <fieldset>
                <select name="country_id" class="form-select" aria-label="Default select example" id="chooseLocation"
                  onChange="this.form.click()">
                  <option selected>Địa điểm</option>

                  @foreach ($countries as $country)
          <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
                </select>
              </fieldset>
            </div>
            <div class="col-lg-4">
              <fieldset>
                <select name="price" class="form-select" aria-label="Default select example" id="choosePrice"
                  onChange="this.form.click()">
                  <option selected>Chi phí</option>
                  <option value="100">$100 </option>
                  <option value="250">$250 </option>
                  <option value="500">$500 </option>
                  <option value="1000">$1,000 </option>
                </select>
              </fieldset>
            </div>
            <div class="col-lg-2">
              <fieldset>
                <button type="submit" class="border-button">Kết quả tìm kiếm</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="amazing-deals">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading text-center">
          <h2>Ưu đãi tốt nhất trong tuần</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
        </div>
      </div>
      @if ($searches->count() > 0)
    @foreach ($searches as $city)
    <div class="col-lg-6 col-sm-6">
    <div class="item">
    <div class="row">
      <div class="col-lg-6">
      <div class="image">
      <img src="{{asset('assets/images/' . $city->image . '')}}" alt="">
      </div>
      </div>
      <div class="col-lg-6 align-self-center">
      <div class="content">
      <span class="info">*Giá ưu đãi chỉ riêng hôm nay</span>
      <h4>{{$city->name}}</h4>
      <div class="row">
      <div class="col-6">
        <i class="fa fa-clock"></i>
        <span class="list">{{$city->num_days}} ngày</span>
      </div>
      <div class="col-6">
        <i class="fa fa-map"></i>
        <span class="list">Điểm tham quan</span>
      </div>
      </div>
      <!-- <p>Lorem ipsum dolor sit amet dire consectetur adipiscing elit.</p> -->
      <div class="main-button">
      <a href="{{route('traveling.reservation', $city->id)}}">Đặt ngay</a>
      </div>
      </div>
      </div>
    </div>
    </div>
    </div>
  @endforeach
  @else

  <p class="alert alert-success">không có kết quả</p>
@endif


    </div>
  </div>
</div>
@endsection