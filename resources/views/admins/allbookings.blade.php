@extends('layouts.admin')

@section('content')


<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">num_of_geusts</th>
                    <th scope="col">checkin_date</th>
                    <th scope="col">destination</th>
                    <th scope="col">status</th>
                    <th scope="col">payment</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>MOhamed</td>
                    <td>33333</td>
                    <td>4</td>
                    <td>23-3-19</td>
                    <td>Berlin</td>
                    <td>Pending</td>
                    <td>$104</td>
                     <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>MOhamed</td>
                    <td>33333</td>
                    <td>4</td>
                    <td>23-3-19</td>
                    <td>Berlin</td>
                    <td>Pending</td>
                    <td>$104</td>
                     <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>MOhamed</td>
                    <td>33333</td>
                    <td>4</td>
                    <td>23-3-19</td>
                    <td>Berlin</td>
                    <td>Pending</td>
                    <td>$104</td>
                     <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
@endsection