
@extends('ui_layouts.master')
@section('firstRow')
    
@endsection
@section('content')
<style>
        .manish img{
            height:400px;
            width: 100%;
        }
    </style>
<div class="container-fluid">
                <div class="row " style="text-align: justify;">
                    <!-- start row -->
                    <div class="col-md-9 px-5 pt-3 manish mt-5">
                        <h3 class="text-center fw-bold">ABOUT US</h3>
                        {{-- <div class="text-justify manish">
                            

                        </div> --}}
                        @foreach ($abouts as $ab)
                        <img src="{{ asset('images/' . $ab->image) }}" height="300px" width="100%">
                            {!! $ab->description !!} 
                        @endforeach

                    </div>
                    @include('ui_layouts.rightSide')
                </div>
            </div><!-- end row -->
           

@endsection