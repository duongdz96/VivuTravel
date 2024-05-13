<?php

namespace App\Http\Controllers\Traveling;

use App\Http\Controllers\Controller;
use App\Models\city\city;
use App\Models\Country\Country;
use App\Models\Reservation\Reservation;
use Auth;
use Illuminate\Http\Request;
use Session;


class TravelingController extends Controller
{
  //


  public function about($id)
  {
    $cities = city::select()->orderBy('id', 'desc')->take(5)->where('country_id', $id)->get();

    $country = Country::find($id);

    $citiesCount = City::select()->where('country_id', $id)->count();

    return view('traveling.about', compact('cities', 'country', 'citiesCount'));
  }


  public function makeReservations($id)
  {
    $city = City::find($id);
    return view('traveling.reservation', compact('city'));
  }

  public function storeReservations(Request $request, $id)
  {
    $city = City::find($id);


    if ($request->check_in_date > date("Y-m-d")) {
      $totalPrice = (int) $city->price * (int) $request->num_guests;
      $storeReservations = Reservation::create([
        "name" => $request->name,
        "phone_number" => $request->phone_number,
        "num_guests" => $request->num_guests,
        "check_in_date" => $request->check_in_date,
        "destination" => $request->destination,
        "price" => $totalPrice,
        "user_id" => $request->user_id,
      ]);


      if ($storeReservations) {

        $price = Session::put('price', $city->price * $request->num_guests);

        $newPrice = Session::get($price);

        echo "reservation is made successfully";
      }
    } else {
      echo "Invalid date";
    }



    // return view('traveling.reservation', compact('city'));
  }



}
