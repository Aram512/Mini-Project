@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col md 12">
                <h1>Edit</h1>
                <form action="/zapatos/edit" method="POST">
                @csrf
                <input type="hidden" name="autosid" id="autosid" value="{{ $autos->_id }}">
                    <div class="form-group">
                        <label for="autos_name">Auto Name</label>
                        <input type="text" class="form-control" id="Name" name="Name"  value="{{ $autos->Name }}" >
                    </div>  
                    <div class="form-group">
                        <label for="Miles_per_Gallon"><b>Miles_per_Gallon</b></label>
                        <input type="text" class="form-control" id="Miles_per_Gallon" name="Miles_per_Gallon"  value="{{ $autos->Miles_per_Gallon }}" >
                    </div>
                    <div class="form-group">
                        <label for="Cylinders"><b>Cylinders </b></label>
                        <input type="text" class="form-control" id="Cylinders" name="Cylinders" value="{{ $autos->Cylinders }}" >
                    </div>
                    <div class="form-group">
                        <label for="Horsepower"> <b>Horsepower </b></label>
                        <input type="text" class="form-control" id="Horsepower" name="Horsepower"  value= "{{ $autos->Horsepower}}" >
                    </div>
                    <div class="form-group">
                        <label for="Weight_in_lbs"><b>Weight_in_lbs </b></label>
                        <input type="text" class="form-control" id="Weight_in_lbs" name="Weight_in_lbs"  value="{{ $autos->Weight_in_lbs }}" >
                    </div>
                    <div class="form-group">
                        <label for="Year"><b>Year </b></label>
                        <input type="text" class="form-control" id="Year" name="Year"  value="{{ $autos->Year}}" >
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Origin"><b>Origin </b></label>
                        <input type="text" class="form-control" id="Origin" name="Origin" value="{{ $autos->Origin }}" >
                    </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection