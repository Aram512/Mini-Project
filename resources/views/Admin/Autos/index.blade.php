@extends('layouts.app')

@section('content')
  <div class= "container">
        @if (session('mssg') !== null)
        <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
            {{session('mssg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

     <div class="row">
         <div class= "col-md-12">
            <h1>AramStore</h1>
         </div>
         <div class="col md 12">
         <table class="table">
            <thead>
                <tr>
                    <th scope="">#</th>
                    <th scope=""><b>Name</b></th>
                    <th scope=""><b>Miles_per_Gallon</b></th>
                    <th scope=""><b>Cylinders</b></th>
                    <th scope=""><b>Horsepower</b></th>
                    <th scope=""><b>Weight_in_lbs</b></th>
                    <th scope=""><b>Year</b></th>
                    <th scope=""><b>Origin</b></th>
                    <th scope=""><b>Options</b></th>
                </tr>
            </thead>
            <tbody>

            @foreach($autos as $aut)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{$aut["Name"]}}</td>
                    <td>{{$aut["Miles_per_Gallon"] }}</td>
                    <td>{{$aut["Cylinders"]}}</td>
                    <td>{{$aut["Horsepower"]}}</td>
                    <td>{{$aut["Weight_in_lbs"]}}</td>
                    <td>{{$aut["Year"]}}</td>
                    <td>{{$aut["Origin"]}}</td>
                    <td>
                            <a href="/zapatos/{{ $aut ['_id']}}">Details</a>   |
                            <a href="/zapatos/edit/{{ $aut->_id }}">Edit</a>   |
                            <a href="/zapatos/delete/{{ $aut->_id }}">Delete</a>                
                </tr>
                @endforeach
            </tbody>
            </table>
         </div>
     </div>
  </div>
@endsection




