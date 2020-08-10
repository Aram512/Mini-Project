@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col md 12">
            <h1>Details</h1>
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
        </div>
        <div class="col-md-12">
                <h1>Add a Comment</h1>
                <form action="{{ route ('AutosComment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="autosid" id="autosid" value="{{ $autos->_id->__toString() }}">
                    <div class="form-group">
                        <label for="userid">User Name</label>
                        <input class="form-control" type="text" name="userid" id="userid">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="4"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Add comment</button>
                </form>
            </div>
            <div class="col-md-12">
                <h1>User comments</h1>
                @if (count( $autos->comments) == 0 ||  $autos->comments == null || empty( $autos->comments) )
                        <h1>No comments yet.</h1>
                @else
                    @foreach($autos->comments as $comment)
                    <div class="card col-md-12">
                        <div class="card-body">
                            <h4 class="card-title">{{ $comment->user_id }}</h4>
                            <p class="card-text">{{ $comment->comment }}</p>
                            <p class="card-text">Date published: {{ $comment->date }} UTC</p>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
    </div>
</div>
@endsection

