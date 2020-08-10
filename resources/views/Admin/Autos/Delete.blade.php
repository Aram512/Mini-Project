@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col md 12">
                <h1>Delete</h1>
                <form action="/zapatos/delete" method="POST">
                @csrf
                @method("DELETE")
                <div class="form-group">
                <label for="Name"><b>Name: </b></label>
                <h5 class="card-title">{{ $autos->Name }}</h5>
            </div>
                <ul class="list-group list-group-flush">
                <b>  Miles_per_Gallon:</b><li class="list-group-item">{{ $autos->Miles_per_Gallon }}</li>
                <b>Cylinders: </b> <li class="list-group-item">{{ $autos->Cylinders }}</li>
                <b>Horsepower: </b> <li class="list-group-item">{{ $autos->Horsepower }}</li>            
                <b>  Weight_in_lbs:</b><li class="list-group-item">{{ $autos->Weight_in_lbs }}</li>
                <b>  Year:</b><li class="list-group-item">{{ $autos->Year}}</li>
                <b>  Origin:</b> <li class="list-group-item">{{ $autos->Origin }}</li>
            </ul>    
                    <button class="btn btn-default" type="button">Cancel</button>
                    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                      Delete
                      </button>

                    <!-- Modal -->
                    <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header bg-danger text-dark">
                                    <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Vehicle</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this product? This changes cannot be reverted.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection