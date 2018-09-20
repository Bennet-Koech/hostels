@extends('layout.main')

@section('title', 'Rooms')

@section('content')
    

<!-- products listing -->
<div class="row">
    @forelse ($rooms as $room)
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    {{-- <a class="button expanded add-to-cart">
                        Add to Cart
                    </a> --}}
                    <a href="#">
                    <img src="{{url('images',$room->image)}}"/>
                    </a>
                </div>
                <a href="{{route('room')}}">
                    <h3>
                        {{$room->name}}
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    {{$room->description}}
                </p>
            </div>
        </div>    
    @empty
        <h3>No rooms available</h3>
    @endforelse
    
</div>

@endsection