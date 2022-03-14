@extends('site.layouts.app')
@section('content')

<div class="iner_banner course-single">
    <div class="container">
        <h5>course detail</h5>
        <div class="banner_iner_capstion">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">course detail</a></li>
            </ul>
        </div>
    </div>
</div>
<!--Banner Wrap End-->
<!--Iqoniq Content Wrap Start-->
<div class="iq_content_wrap">
    <!--coures_single_page START-->  
    <section class="coures_single_page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--course_single_heading START-->  
                    <div class="course_single_heading">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 text-left">
                    
                            <h4>{{$course->name}}</h4>
                            
                        </div>
                        <!--Heading Wrap End-->
                        <!--courses_socil START-->
                        <ul class="iq_footer_social">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                            </li>
                        </ul>
                        <!--courses_socil end-->
                        <!--course_comments START-->
                        <ul class="course_comments">
                            <li>
                                <a href="#"><i class="fa fa-clock-o"></i>Feb 2022</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user"></i>Feb 2022</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-comments-o"></i>Nov 2015</a>
                            </li>
                        </ul>
                        <!--course_comments end-->
                    </div>
                    <!--course_single_heading end--> 
                    <!--about_courses START-->  
                    <div class="about_courses">	
                        <!--about_courses_thumb START-->
                        <div class="about_courses_thumb">
                            <div class="lessons-slider">
                                <div>
                                    <img src="{{ asset("storage/$course->course_image") }}"width="100%" height="450px"alt=""/>
                                </div>
                                
                            </div>
                            <div class="iq-course-info">
                                <div class="course-info">
                                    <figure>
                                        <img src="/site/extra-images/admin.jpg">
                                    </figure>
                                    <div class="text-overflow">
                                        <h6><span>By</span> admin</h6>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span>
                                        <i class="fa fa-tags"></i>
                                    </span>
                                    <div class="text-overflow">
                                        <h6>
                                            @foreach ($categories as $key)
                                            @if($key->id==$course->category_id)
                                            <span>Category</span>
                                            <h6>{{ $key->name }}</h6>
                                            @endif
                                            @endforeach</h6>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span>
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </span>
                                    <div class="text-overflow">
                                        <h6>Review</h6>
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <span>
                                        <i class="fa fa-dollar"></i>
                                    </span>
                                    <div class="text-overflow">
                                        <h6><span>Course Fee</span>${{ $course->price_after_discount }}</h6>
                                    </div>
                                </div>
                            </div>
                            <!--Tab Menu Wrap Start-->
                            <div class="iq_tab_menu">
                                <ul id="tabs" data-tabs="tabs">
                                    <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                                    <li><a data-toggle="tab" href="#classlist">Class List</a></li>
                                    <li><a data-toggle="tab" href="#instructor">Instructor</a></li>
                                </ul>
                            </div>
                            <!--Tab Menu Wrap End-->
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <div class="about_courses_thumb_capstion">
                                        <!--Heading Wrap Start-->
                                        <div class="iq_heading_1 iq_heading_2 text-left">
                                            <h4>About The <span>Course</span></h4>
                                        </div>
                                        <!--Heading Wrap End-->
                                        <p>
                                            {{$course->description}}
                                        </p>
                                        
                                        <div class="border-div"></div>
                                        <!--Heading Wrap Start-->
                                        <div class="iq_heading_1 iq_heading_2 text-left">
                                            <h4>Key <span>Features</span></h4>
                                        </div>
                                        <!--Heading Wrap End-->
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                    </div>
                                    <!--about_courses_thumb end-->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <ul class="categries-list">
                                                <li><a href="#">Updated Installations</a></li>
                                                <li><a href="#">Mega Database Provided</a></li>
                                                <li><a href="#">MaurisIn EratJusto</a></li>
                                                <li><a href="#">Ut Enim Ad Minima Veniam</a></li>
                                                <li><a href="#">MaurisIn EratJusto</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <ul class="categries-list">
                                                <li><a href="#">Introduction of The Course</a></li>
                                                <li><a href="#">Mega Database Provided</a></li>
                                                <li><a href="#">MaurisIn EratJusto</a></li>
                                                <li><a href="#">Ut Enim Ad Minima Veniam</a></li>
                                                <li><a href="#">Ut Enim Ad Minima Veniam</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="border-div"></div>
                                    <!--course_lesson START-->
                                    <ul class="categries-list">
                                        <li>
                                            <a href="#">Introduction of The Course</a><span>Duration : 3 Hours</span>
                                        </li>
                                        <li>
                                            <a href="#">Updated Installations</a><span>Duration : 3 Hours</span>
                                        </li>
                                        <li>
                                            <a href="#">Introduction of The Course</a><span>Duration : 3 Hours</span>
                                        </li>
                                        <li>
                                            <a href="#">Updated Installations</a><span>Duration : 3 Hours</span>
                                        </li>
                                    </ul>
                                    <a class="iq_link_1" href="#">View More lessons</a>
                                </div>
                                <div class="tab-pane" id="classlist">
                                    <div class="curriculum-table iqoniq-table">
                                        <ul class="table-row table-header">
                                            <li><div>Serial No</div></li>
                                            <li class="course-name"><div>Class Name</div></li>
                                            
                                        </ul>
                                        @foreach($class_list as $key)
                                        @if($key->course_id==$course->id)
                                         <ul class="table-row">
                                            <li><div>{{$i++}}</div></li>
                                            @if (!Auth::user())
                                            <li class="course-name"><a href="{{ url("/login")}}">{{$key->name}}</a></li>
                                            @else
                                            <li class="course-name"><a href="{{ url("/courseclass/$course->id/$key->id")}}">{{$key->name}}</a></li>
                                            @endif
                                           
                                            
                                        </ul>
                                        @endif
                                        @endforeach
                                       {{-- <ul class="table-row">
                                            <li><div>IQS21</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Geometry and Linear Algebra</a></div>
                                            </li>
                                            <li><div>50</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS22</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Foundations of data Analysis</a></div>
                                            </li>
                                            <li><div>45</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS23</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Intorducation to Algebra I</a></div>
                                            </li>
                                            <li><div>40</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS24</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Data Analysis I</a></div>
                                            </li>
                                            <li><div>35</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div></div></li>
                                            <li class="course-name"><div>2st Semester</div></li>
                                            <li><div></div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS25</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Machine Learning</a></div>
                                            </li>
                                            <li><div>30</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS26</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Data Mines</a></div>
                                            </li>
                                            <li><div>12</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS27</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Intorducation to data Analysis II</a></div>
                                            </li>
                                            <li><div>25</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS28</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Intorducation to Algebra II</a></div>
                                            </li>
                                            <li><div>20</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div></div></li>
                                            <li class="course-name"><div>2st Semester</div></li>
                                            <li><div></div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS29</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Machine Learning</a></div>
                                            </li>
                                            <li><div>15</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS30</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Data Mines</a></div>
                                            </li>
                                            <li><div>12</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS31</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Intorducation to data Analysis II</a></div>
                                            </li>
                                            <li><div>10</div></li>
                                        </ul>
                                        <ul class="table-row">
                                            <li><div>IQS32</div></li>
                                            <li class="course-name">
                                                <div><a href="#">Intorducation to Algebra II</a></div>
                                            </li>
                                            <li><div>5</div></li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="tab-pane" id="instructor">
                                    <!--Teacher Wrap List Start-->
                                    <!--Teacher Thumb Start-->
                                    @foreach($instructors as $key)
                                    @if($key->id==$course->instructor_id)
                                    <div class="iq_teacher_style_1">
                                        
                                        <figure>
                                            <img src="{{ asset("storage/$key->image") }}" alt="Image Here">
                                        </figure>
                                        
                                        
                                        <div class="text">
                                            <h4><a href="#">{{$key->name}}</a></h4>
                                            <h6>{{$key->skill}}</h6>
                                            <p>{{$key->description}}</p>
                                            <ul class="iq_footer_social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    <!--Teacher Thumb End-->
                                    <!--Teacher Thumb Start-->
                            {{--         <div class="iq_teacher_style_1">
                                        <figure>
                                            <img src="/site/extra-images/teacher-04.jpg" alt="Image Here">
                                        </figure>
                                        <div class="text">
                                            <h4><a href="#">Anna Doe</a></h4>
                                            <h6>Language Instructor</h6>
                                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudinris.</p>
                                            <ul class="iq_footer_social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!--Teacher Thumb End-->
                                    <!--Teacher Thumb Start-->
                                    {{-- <div class="iq_teacher_style_1">
                                       <figure>
                                            <img src="/site/extra-images/teacher-05.jpg" alt="Image Here">
                                        </figure>
                                        <div class="text">
                                            <h4><a href="#">John Doe</a></h4>
                                            <h6>Vice President</h6>
                                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudinris.</p>
                                            <ul class="iq_footer_social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!--Teacher Thumb End-->
                                    <!--Teacher Thumb Start-->
                                   {{--  <div class="iq_teacher_style_1">
                                        <figure>
                                            <img src="/site/extra-images/teacher-06.jpg" alt="Image Here">
                                        </figure>
                                        <div class="text">
                                            <h4><a href="#">Sara Adward</a></h4>
                                            <h6>Manager</h6>
                                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudinris.</p>
                                            <ul class="iq_footer_social">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!--Teacher Thumb End-->
                                    <!--Teacher Wrap List End-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--about_courses end-->  
                    <div class="course-rating-outer">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 iq_heading_2 text-left">
                            <h4>Course <span>Rating</span></h4>
                        </div>
                        <!--Heading Wrap End-->
                        <div class="course-rating">
                            <div class="course-rating-head">
                                <span><b>4.4/5.0</b></span>
                                <span>360 ratings</span>
                                <div class="rating_down">
                                    <div class="rating_up" style="width:100%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <div class="course-progress">
                                    <span class="pull-left">5 Stars</span>
                                    <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span class="sr-only">70% Complete</span>
                                          </div>
                                    </div>
                                    <span class="pull-right">15</span>
                                </div>
                                <div class="course-progress">
                                    <span class="pull-left">4 Stars</span>
                                    <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                            <span class="sr-only">70% Complete</span>
                                          </div>
                                    </div>
                                    <span class="pull-right">09</span>
                                </div>
                                <div class="course-progress">
                                    <span class="pull-left">3 Stars</span>
                                    <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                            <span class="sr-only">70% Complete</span>
                                          </div>
                                    </div>
                                    <span class="pull-right">03</span>
                                </div>
                                <div class="course-progress">
                                    <span class="pull-left">2 Stars</span>
                                    <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                            <span class="sr-only">70% Complete</span>
                                          </div>
                                    </div>
                                    <span class="pull-right">05</span>
                                </div>
                                <div class="course-progress">
                                    <span class="pull-left">1 Stars</span>
                                    <div class="progress">
                                          <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                            <span class="sr-only">70% Complete</span>
                                          </div>
                                    </div>
                                    <span class="pull-right">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Feed Back Slider Start-->
                    <div class="feedback-outer">
                        <!--Heading Wrap Start-->
                        <div class="iq_heading_1 iq_heading_2 text-left">
                            <h4>Students’ s <span>Feedback</span></h4>
                        </div>
                        <!--Heading Wrap End-->
                        <div class="feedback-wrap">
                            <!--Feedback START-->
                            <div class="col-sm-6">
                                <div class="feedback">
                                    <div class="feedback-capstion">
                                        <figure>
                                            <img src="/site/extra-images/s_thumb.jpg" alt=""/>
                                        </figure>
                                        <h6>Anna Doe Says :</h6>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feedback End-->
                            <!--Feedback START-->
                            <div class="col-sm-6">
                                <div class="feedback">
                                    <div class="feedback-capstion">
                                        <figure>
                                            <img src="/site/extra-images/s_thumb.jpg" alt=""/>
                                        </figure>
                                        <h6>Anna Doe Says :</h6>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feedback End-->
                            <!--Feedback START-->
                            <div class="col-sm-6">
                                <div class="feedback">
                                    <div class="feedback-capstion">
                                        <figure>
                                            <img src="/site/extra-images/s_thumb.jpg" alt=""/>
                                        </figure>
                                        <h6>Anna Doe Says :</h6>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feedback End-->
                            <!--Feedback START-->
                            <div class="col-sm-6">
                                <div class="feedback">
                                    <div class="feedback-capstion">
                                        <figure>
                                            <img src="/site/extra-images/s_thumb.jpg" alt=""/>
                                        </figure>
                                        <h6>Anna Doe Says :</h6>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feedback End-->
                            <!--Feedback START-->
                            <div class="col-sm-6">
                                <div class="feedback">
                                    <div class="feedback-capstion">
                                        <figure>
                                            <img src="/site/extra-images/s_thumb.jpg" alt=""/>
                                        </figure>
                                        <h6>Anna Doe Says :</h6>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--Feedback End-->
                        </div>
                    </div>	
                    <!--Feed Back Slider End-->
                </div>
                <div class="col-md-4">
                    <div class="aside-bar">
                        <!--course_inrp_side_search START-->
                        <div class="widget widget-search">
                            <form class="iq-input">
                                <input placeholder="Search ..." type="text">
                                <label class="iq-input-icon"><input type="submit"></label>
                            </form>
                        </div>
                        <!--course_inrp_side_search end-->
                        <!--course_inrp_side_description START-->
                        <div class="widget course-description">
                            <!--Widget Title Start-->
                            <h5 class="widget-title"><span>Enroll</span> </h5>
                            <!--Widget Title End-->
                            <p>{{$course->description}}</p>
                            <ul class="course-lesson-list">
                                <li>
                                    <a href="#">
                                        <span class="icon-level-up-arrow"></span>
                                    Level</a>
                                    {{ App\Enums\CourseType::getDescription($course->course_type_id) }}
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon-signs">
                                           
                                        </span>
                                    Length</a>
                                   {{$course->Course_length}} Classes
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon-translate">
                                          
                                        </span>
                                    Language</a>
                                    English
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon-home">
                                          
                                        </span>
                                    Institution</a>
                                    CourseIT
                                </li>
                            </ul>
                        </div>
                        <!--course_inrp_side_description end-->
                        <!--coures_instractor_area START-->
                        <div class="widget coures_instractor_area">
                            <div class="instractor_heading">
                                @if (!Auth::user())
                                <h5><a href="{{ url("/login")}}">Enroll This Course</a></h5>
                                @else
                                <h5><a href="{{ url("/course/$course->id")}}">Enroll This Course</a></h5>
                                @endif
                                
                            </div>
                            <h5><a href="#">INSTRUCTORS</a></h5>
                            @foreach($instructors as $key)
                            @if($key->id==$course->instructor_id)
                            <div class="coures_instractor_thumb">
                                <figure>
                                    <img src="{{ asset("storage/$key->image") }}" height="80px" width="80px"alt=""/>
                                </figure>
                                <div class="thumb_capstion">
                                    <h5><a href="#">{{$key->name}}</a></h5>
                                   {{--  <p>Teacher of {{$course->}}</p> --}}
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <!--coures_instractor_area end-->
                        <!--coures_archives start-->
                        <div class="widget widget_archive">
                            <!--Widget Title Start-->
                            <h5 class="widget-title"><span>our</span> Course</h5>
                            <!--Widget Title End-->
                            <ul>
                                <li>
                                    <a href="#">Politics & History</a><span>03</span>
                                </li>
                                <li>
                                    <a href="#">Journalism</a><span>01</span>
                                </li>
                                <li>
                                    <a href="#">Medical Sciences</a><span>03</span>
                                </li>
                                <li>
                                    <a href="#">Health</a><span>01</span>
                                </li>
                                <li>
                                    <a href="#">Sports</a><span>03</span>
                                </li>
                                <li>
                                    <a href="#">Atrs</a><span>02</span>
                                </li>
                                <li>
                                    <a href="#">Tourism & Culture</a><span>06</span>
                                </li>
                            </ul>
                        </div>
                        <!--coures_archives end-->
                        <!--COURES CATEGORIES START-->
                        <div class="widget widget_time">
                            <!--Widget Title Start-->
                            <h5 class="widget-title"><span>working</span> hours</h5>
                            <!--Widget Title End-->
                            <ul>
                                <li>
                                    <span>Monday</span>08:30 am - 05:30 pm
                                </li>
                                <li>
                                    <span>Tuesday</span>08:30 am - 05:30 pm
                                </li>
                                <li>
                                    <span>Wednesday</span>08:30 am - 05:30 pm
                                </li>
                                <li>
                                    <span>Thursday</span>08:30 am - 05:30 pm
                                </li>
                                <li>
                                    <span>Friday</span>08:30 am - 05:30 pm
                                </li>
                                <li>
                                    <span>Saturday</span>Closed
                                </li>
                                <li>
                                    <span>Sunday</span>Closed
                                </li>
                            </ul>
                        </div>
                        <!--COURES CATEGORIES END-->
                        <!--POPULAR START-->
                        <div class="widget widget-popular">
                            <!--Widget Title Start-->
                            <h5 class="widget-title"><span>popular</span>courses</h5>
                            <!--Widget Title End-->
                            <!--POPULAR THUMB START-->
                            @foreach ($special_courses as $c)
                            <div class="popular_thumb">
                                <figure>
                                    <img src="{{ asset("storage/$c->course_image") }}" alt=""/>
                                </figure>
                                <!--COURES POPULAR CAPSTION START-->
                                <div class="overflow-text">
                                    
                                    <h6><a href="{{ url("/coursedetails/$c->id")}}">{{$c->name}}</a></h6>
                                    <!--RATING AREA START-->
                                    <div class="rating-wrap">
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                    </div>	
                                    <!--RATING AREA End-->							
                                    @foreach($instructors as $key)
                                    @if($key->id==$course->instructor_id)
                                    <p>{{$key->name}}</p>
                                    @endif
                                    @endforeach
                                    <span>${{ $c->price_after_discount }}</span>
                                    <!--COURES RATING AREA END-->
                                </div>
                                <!--COURES POPULAR CAPSTION END-->
                            </div>
                            @endforeach
                            <!--POPULAR THUMB END-->
                            <!--POPULAR THUMB START-->
                            {{-- <div class="popular_thumb">
                                <figure>
                                    <img src="/site/extra-images/popular-thumb2.jpg" alt=""/>
                                </figure>
                                <!--COURES POPULAR CAPSTION START-->
                                <div class="overflow-text">
                                    <h6><a href="#">Professional Teching Course</a></h6>
                                    <!--RATING AREA START-->
                                    <div class="rating-wrap">
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                    </div>	
                                    <!--RATING AREA End-->							
                                    <p>Anna Doe</p>
                                    <span>$99.99</span>
                                    <!--COURES RATING AREA END-->
                                </div>
                                <!--COURES POPULAR CAPSTION END-->
                            </div>
                            <!--POPULAR THUMB END-->
                            <!--POPULAR THUMB START-->
                            <div class="popular_thumb">
                                <figure>
                                    <img src="/site/extra-images/popular-thumb3.jpg" alt=""/>
                                </figure>
                                <!--COURES POPULAR CAPSTION START-->
                                <div class="overflow-text">
                                    <h6><a href="#">Professional Teching Course</a></h6>
                                    <!--RATING AREA START-->
                                    <div class="rating-wrap">
                                        <div class="rating_down">
                                            <div class="rating_up" style="width:100%;"></div>
                                        </div>
                                    </div>	
                                    <!--RATING AREA End-->							
                                    <p>Anna Doe</p>
                                    <span>$99.99</span>
                                </div>
                                <!--COURES POPULAR CAPSTION END-->
                            </div> --}}
                            <!--POPULAR THUMB END-->
                        </div>
                        <!--POPULAR END-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--coures_single_page end-->
</div>
<!--Iqoniq Content Wrap End-->
<!--Info Wrap Start-->
<div class="iq_contact_info">
    <div class="container">
        <ul>
            <li>
                <i class="fa fa-map-marker"></i>
                <div class="iq_info_wrap">
                    <h5>University Address</h5>
                    <p>Abc Street , new town <span>Sydney</span></p>
                </div>
            </li>
            <li>
                <i class="fa fa-phone"></i>
                <div class="iq_info_wrap">
                    <h5>Contact Number</h5>
                    <span>+ (0) 123 456 7891</span>
                    <span>+ (0) 123 456 7891</span>
                </div>
            </li>
            <li>
                <i class="fa fa-phone"></i>
                <div class="iq_info_wrap">
                    <h5>Email;</h5>
                    <a href="mailto:Info@info.com">Info@info.com</a>
                    <a href="mailto:Support@support.com">Support@support.com</a>
                </div>
            </li>
        </ul>
    </div> 
</div>
 @endsection