@extends('layout.main')

@section('content')

        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to Hostel listings
                </strong>
            </h2>
            <br>
        <a href="{{url('/rooms')}}"><button class="button large">Check out Available rooms</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Realture&rsquo;s Latest Listings
            </h2>
        </div>
       
        <!-- Latest Rooms -->
        <div class="row">
        @forelse ($rooms->chunk(4) as $chunk)
        @foreach($chunk as $room)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
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
            @endforeach    
        @empty
        <h3>No rooms available</h3>
        @endforelse
    
        </div>
        <!-- Footer -->
        <br>
@endsection