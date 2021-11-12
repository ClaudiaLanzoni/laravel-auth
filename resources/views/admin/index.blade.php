@extends('layouts.app')

@section('content')
    @foreach ($records as $record)

    <div class="container">
        <div class="album_box d-flex justify-content-center">

            <div class="text-center m-3">   
                <h3>{{$record->artist}}</h3>
                <h5>{{$record->album_name}}</h5>
                <img class="album_img_size mb-4" src="{{$record->url}}" alt="album di {{$record->artist}}">
            </div> 
            
        </div>
    </div>
        
    @endforeach
@endsection