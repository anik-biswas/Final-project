@extends('site.layouts.app')
@section('content')

<section>
    <div class="iner_banner">
        <div class="container">
            <h5>Our Courses</h5>
            <div class="banner_iner_capstion">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Courses</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <!--Heading Wrap Start-->
        <div class="iq_heading_1 text-center">
            {{-- <h4>Our Featured <span>Courses</span></h4>
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
            <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p> --}}
        </div>
        <!--Heading Wrap End-->
        <!--Tab Menu Wrap Start-->
        <div class="iq_tab_menu">
            <ul id="tabs" data-tabs="tabs">
                <li class="active"><a data-toggle="tab" href="#courselist">Courses</a></li>
                <li ><a data-toggle="tab" href="#latest">Latest</a></li>
                <li><a data-toggle="tab" href="#Special">Special</a></li>
            </ul>
        </div>
        <!--Tab Menu Wrap End-->
        <!--Tab Menu Detail Wrap Start-->
        <div id="my-tab-content" class="tab-content">
            <div class="row tab-pane active" id="courselist">
                <!--Courses List Start-->
                @foreach ($courses as $c)
                <div class="col-md-4">
                    <!--courses popular thumb start -->
                    <div class="coureses_Popular_thumb">
                        <figure>
                            <img alt="Image Here" src="{{ asset("storage/$c->course_image") }}" height="220px">
                            <a class="iq_link_1" href="{{ url("/coursedetails/$c->id") }}">view detail</a>
                        </figure>
                        <!-- popular thumb start -->
                        <div class="Popular_capstion_thumb">
                            <!-- popular caption start -->
                            <div class="popular_capstion">
                                <h5><a href="{{ url("/coursedetails/$c->id") }}">{{$c->name}}</a></h5>
                               
                                <!--RATING AREA START-->
                                <div class="rating_down">
                                    <div class="rating_up" style="width:100%;"></div>
                                </div>
                                <!--RATING AREA End-->  	
                                <p> {{$c->description}}</p>
                            </div>
                            <!-- popular caption end -->
                            <!-- popular caption bottom start -->
                            <ul class="popular_capstion_bottom">
                                <li>
                                    <span>CourseIT</span>
                                    <span class="right"></span>
                                </li>
                                <li>
                                    <span>{{$c->Course_length}}</span>
                                    <span class="right">classes</span>
                                </li>
                            </ul>
                            <!-- popular caption bottom end -->
                            <span class="price"><strong>${{ $c->price_after_discount }}</strong> @if ($c->discount_price > 0)
                                <del  text-align="right">${{ $c->price }}</del>
                             @endif</span>
                        </div>
                        <!-- popular thumb end -->
                    </div>
                    <!--courses popular thumb end -->
                </div>
                @endforeach
                
                <!--Courses List End-->
                <!--Courses List Start-->
            
                <!--Courses List End-->
            </div>
            <div class="row tab-pane active" id="latest">
                <!--Courses List Start-->
                @foreach ($latest_courses as $c)
                <div class="col-md-4">
                    <!--courses popular thumb start -->
                    <div class="coureses_Popular_thumb">
                        <figure>
                            <img alt="Image Here" src="{{ asset("storage/$c->course_image") }}" height="220px">
                            <a class="iq_link_1" href="{{ url("/coursedetails/$c->id") }}">view detail</a>
                        </figure>
                        <!-- popular thumb start -->
                        <div class="Popular_capstion_thumb">
                            <!-- popular caption start -->
                            <div class="popular_capstion">
                                <h5><a href="{{ url("/coursedetails/$c->id") }}">{{$c->name}}</a></h5>
                               
                                <!--RATING AREA START-->
                                <div class="rating_down">
                                    <div class="rating_up" style="width:100%;"></div>
                                </div>
                                <!--RATING AREA End-->  	
                                <p> {{$c->description}}</p>
                            </div>
                            <!-- popular caption end -->
                            <!-- popular caption bottom start -->
                            <ul class="popular_capstion_bottom">
                                <li>
                                    <span>CourseIT</span>
                                    <span class="right"></span>
                                </li>
                                <li>
                                    <span>{{$c->Course_length}}</span>
                                    <span class="right">classes</span>
                                </li>
                            </ul>
                            <!-- popular caption bottom end -->
                            <span class="price"><strong>${{ $c->price_after_discount }}</strong> @if ($c->discount_price > 0)
                                <del  text-align="right">${{ $c->price }}</del>
                             @endif</span>
                        </div>
                        <!-- popular thumb end -->
                    </div>
                    <!--courses popular thumb end -->
                </div>
                @endforeach
                
                <!--Courses List End-->
                <!--Courses List Start-->
            
                <!--Courses List End-->
            </div>
            
             <div class="row tab-pane" id="Special">
                @foreach ($special_courses as $c)
                <div class="col-md-4">
                    <!--courses popular thumb start -->
                    <div class="coureses_Popular_thumb">
                        <figure>
                            <img alt="Image Here" src="{{ asset("storage/$c->course_image") }}" height="220px">
                            <a class="iq_link_1" href="{{ url("/coursedetails/$c->id") }}">view detail</a>
                        </figure>
                        <!-- popular thumb start -->
                        <div class="Popular_capstion_thumb">
                            <!-- popular caption start -->
                            <div class="popular_capstion">
                                <h5><a href="{{ url("/coursedetails/$c->id") }}">{{$c->name}}</a></h5>
                               
                                <!--RATING AREA START-->
                                <div class="rating_down">
                                    <div class="rating_up" style="width:100%;"></div>
                                </div>
                                <!--RATING AREA End-->  	
                                <p> {{$c->description}}</p>
                            </div>
                            <!-- popular caption end -->
                            <!-- popular caption bottom start -->
                            <ul class="popular_capstion_bottom">
                                <li>
                                    <span>CourseIT</span>
                                    <span class="right"></span>
                                </li>
                                <li>
                                    <span>{{$c->Course_length}}</span>
                                    <span class="right">classes</span>
                                </li>
                            </ul>
                            <!-- popular caption bottom end -->
                            <span class="price"><strong>${{ $c->price_after_discount }}</strong> @if ($c->discount_price > 0)
                                <del  text-align="right">${{ $c->price }}</del>
                             @endif</span>
                        </div>
                        <!-- popular thumb end -->
                    </div>
                    <!--courses popular thumb end -->
                </div>
                @endforeach 
               
               
             
                

            </div>
        </div>
        <!--Tab Menu Detail Wrap End-->
    </div>
</section>
 @endsection