@extends('ui_layouts.master')
@section('firstRow')
    @include('ui_layouts.news')
@endsection
@section('content')
    <!-- mid column start-->
    <style>
        .photomain2{
            height: 300px !important;
        }
        </style>
    <div class="col-md-8 border mt-3  pt-3">
        <div class="row widthinmobile">
           
        @foreach ($home as $homepost) 
        <div class="col-md-6">
            <a href="{{ url('show/'.$homepost->slug_url) }}" class="text-decoration-none text-dark"><img
                    src="{{ asset($homepost->image) }}" alt=""
                    class="photomain photomain2 w-100">
            </a>
                    <a href="{{ url('show/'.$homepost->slug_url) }}" class="text-decoration-none text-dark">
                <small class="fw-bold mobileheading" style="color:#c20017;">

                </small>
                <p class="mt-2 mobileheading">
                    {{ $homepost->short_content }}
                </p>
            </a>
            <small class="pt-3" style="color:#c20017;">

            </small>
            <small class="text-secondary">
               {{ $homepost->created_at }} </small>
        </div>
        @endforeach
        </div>
        <div class="row mt-3">
         {{-- <h4 class="mb-3 fw-bold">Entertainment</h4> --}}
         <div class="col-md-6"></div>
         <div class="col-md-6">
             <div class="row">
                 <div class="col-md-12">
                     <div class="mt-3">
                         <h3 class="mb-3">Categories</h3>
                         @if (isset($category) && count($category) > 0)
                             @foreach ($category as $cat)
                                 <p>
                                     <i class="fas fa-chevron-right"></i>
                                     <a href="{{ url('/'.$cat->slug_url)}}"
                                         class="ms-2 text-decoration-none text-dark">
                                         {{ $cat->name }}
                                     </a>
                                 </p>
                                 <hr class="text-secondary">
                             @endforeach
                         @else
                             {{-- <p>No categories found.</p> --}}
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>

    </div>
@endsection
@section('lastRow')

    <!-- <div class="col-md-4 border mt-3 pt-3 wheatherclass">-->
        <!----------------------start weathre status------------------------------->
        <!-- <div class=" row  col-md-12 mx-1 p-3 wheatherclass2 ">-->
            <!-- start 2nd row  -->
            <!-- <h4 class=" wh-status">
                Weather Status
            </h4>
            <h3>
                New Delhi </h3>
            <div class="row text-center border-top border-bottom bg-white py-3">
                <div class="col-md-3">
                    <div>
                        <i class="fas fa-tint " style="font-size:16px;"></i>
                        <small>
                            32%
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div> <i class="fas fa-wind"></i><small>
                            3.09km/h
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div> <i class="fas fa-cloud"></i><small>
                            40%
                        </small>
                    </div>
                </div>
            </div>
            <div class="row mt-3 bg-white pb-4">
                <div class="col-md-4">
                    <p class="my-2 text-center "> <img class="photomain" src="http://openweathermap.org/img/w/50d.png"
                            style="width: 100%;">
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="fw-normal my-2 pt-2 temp mobileheading" style="font-size: 20px;"><b>
                            21.09&deg;C
                        </b>
                    </p>
                </div>
                <h5 class="ps-5 ms-4">
                    Wednesday 4:51 pm </h5>
            </div>
            <div class="row mt-3 bg-white py-3">
                <h5 class="ps-5 ms-4">
                    6th March, 2024 </h5>
            </div> -->
        <!--</div> -->
        <!-- <div class="row p-2 mt-3 m-1 ">

            <div class="row mt-3 ">
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col">
                <div class="prmtbsn">
                    <h3 class="p-5 pro"><a href="#" class="text-decoration-none text-capitalize text-white">promote
                            Your <br>
                            Business!</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mt-3 border  m-1 bg-white">
            <div class="col">
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <div class="mt-4" id="subscribe">
                    <h5>Get the best of Soledad Modern News delivered to your inbox</h5>
                    <p>Subscribe our newsletter for latest world news. Let's stay updated!</p>
                    <form action="{{route('subscription.store')}}" method="POST" id="subscribeform">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="sname" placeholder="Name">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="form-control" name="semail" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="submit" class="form-control btn-sub" value="SUBSCRIBE">
                        </div>
                    </form>
                    <h3></h3>
                </div>
            </div>
        </div> -->
    <!-- </div> 
    </div>-->
    <!-- End 3rd column-->
@endsection