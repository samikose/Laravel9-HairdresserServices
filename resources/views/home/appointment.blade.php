@extends('layouts.frontbase(blank)')

@section('title', 'Appointment | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Appointment</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        @include('home.messages')
                        <form action="{{route("storeappointment")}}" method="post">
                            @csrf
                            <div class="mt-10">
                                <input type="text" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="note" placeholder="Note" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Note'" required="" class="single-input">
                            </div>
                            <div class="row">
                                <div class="default-select" id="default-select">
                                    <select name="worker_id" style="display: none;">
                                        @foreach($userlist1 as $rs)
                                            @foreach($rs->roles as $role)
                                                @if($role->name == "worker")
                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                                <div class="default-select" id="default-select">
                                    <select name="service_id" style="display: none;">
                                        @foreach($servicelist1 as $rs)
                                            <option value="{{$rs->id}}">{{$rs->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <label for="birthday">Birthday:</label>
                                <input type="date" id="birthday" name="date">


                            <input type="time" id="time" name="time"
                                   min="09:00" max="18:00" required>


                            <div class="input-group-icon mt-10">
                            @auth
                                <button type="submit" value="Send Message" class="button button-contactForm boxed-btn" >Send</button>
                            @else
                                <a href="/login" class="button button-contactForm btn_1 boxed-btn">For Submit Your Review, Please Login</a>
                            @endauth
                            </div>
                </form>
            </div>
                </div>
            </div>
        </section>

    </main>
@endsection

