<header class="iq_header_1">
    <div class="container">
        <!--Logo Wrap Start-->
        <div class="iq_logo">
            <a href="#"><img src="/site/images/logo.jpg" alt="Iqoniq Themes"></a>
        </div>
        <!--Logo Wrap Start-->
        <!--Top Strip Wrap Start-->
        <div class="iq_ui_element">
            <!--Top Strip Wrap Start-->
            {{-- <div class="iq_top_strip">
                
                <div class="iq_input pull-right">
                    <a href="home-1.html#login-form" class="iq_link_1 " width="20px">Login</a>
                </div>
                <div class="iq_input pull-right">
                    <a href="home-1.html#login-form" class="iq_link_1 ">Signup</a> 
                </div>
            </div> --}}
            <!--Top Strip Wrap End-->
            <!--Navigation wrap Start-->
            <div class="navigation-wrapper pull-left">
                <div class="navigation pull-left">
                    <ul>
                        <li class="active"><a href="index-2.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        
                  
              
                        <li><a href="#"> {{App\Enums\MainCategory::getDescription(0)}}</a>
                            <ul class="children">
                                @foreach ($categories as $item)
                                @if ($item->main_category_id===0)
                                <li><a href="#">{{$item->name}}</a></li>
                                @endif
                                
                                @endforeach
                                
                                
                            </ul>
                        </li>
                        
                         <li><a href="#">{{App\Enums\MainCategory::getDescription(1)}}</a>
                            <ul class="children">
                                @foreach ($categories as $item)
                                @if ($item->main_category_id===1)
                                <li><a href="#">{{$item->name}}</a></li>
                                @endif
                                
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">{{App\Enums\MainCategory::getDescription(2)}}</a>
                            <ul class="children">
                                @foreach ($categories as $item)
                                @if ($item->main_category_id===2)
                                <li><a href="#">{{$item->name}}</a></li>
                                @endif
                                
                                @endforeach
                            </ul>
                        </li> 
                        <li><a href="#">Staff</a>
                            <ul class="children">
                                <li><a href="our-teachers.html">Our Staff</a></li>
                                <li><a href="staff-detail.html">Staff Detail</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="#">Gallery</a>
                            <ul class="children">
                                <li><a href="gallery-medium.html">Gallery medium</a></li>
                                <li><a href="gallery-small.html">Gallery small</a></li>
                                <li><a href="gallery-mesnory.html">Masonry Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Countact Us</a></li> --}}
                        <li> <a href="{{ url("/login")}}"class="navigation pull-right" >Login</a></li>
                        <li><a href="{{ url("/register")}}"class="navigation pull-right">Signup</a></li>
                    </ul>
                </div>
                <div class="navigation pull-right">
                    <ul>
                       
                
                            {{-- <div class="iq_input pull-right">
                                <a href="home-1.html#login-form" class="iq_link_1 " width="20px">Login</a>
                            </div>
                            <div class="iq_input pull-right">
                                <a href="home-1.html#login-form" class="iq_link_1 ">Signup</a> 
                            </div> --}}
                      
                        <li><a>
                            
                        @auth
                        {{Auth::user()->name}}
                        <form action="{{url('/logout')}}" method="POST">
                            @csrf
                          <button type="submit" class="nav-link" data-widget=""   role="button">
                            logout
                          </button>
                        </form>
                        @endauth    
                        </a></li> 
                    </ul>
                </div>
                <!--DL Menu Start-->
                {{-- <div id="mg-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                        <li class="menu-item mg-parent-menu">
                            <a href="index-2.html">home</a>
                        </li>
                        <li><a href="about-us.html">About us</a></li>
                        <li class="menu-item mg-parent-menu"><a href="#">course</a>
                            <ul class="dl-submenu">
                               <li><a href="course-detail.html">course detail</a></li>
                                <li><a href="courses-small.html">Courses Small</a></li>
                                <li><a href="our-courses-list.html">Our Courses List</a></li>
                                <li><a href="our-courses.html">Our Courses</a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu"><a href="#">Blog</a>
                            <ul class="dl-submenu">
                                <li><a href="blog-large.html">Blog Large</a></li>
                                <li><a href="blog-medium.html">blog medium</a></li>
                                <li><a href="blog-small.html">Blog small</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu"><a href="#">Event</a>
                            <ul class="dl-submenu">
                                <li><a href="event-detail.html">Event Detail</a></li>
                                <li><a href="event-calender.html">Even Calender</a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu"><a href="#">Staff</a>
                            <ul class="dl-submenu">
                                <li><a href="our-teachers.html">Our Staff</a></li>
                                <li><a href="staff-detail.html">Staff Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu"><a href="#">Gallery</a>
                            <ul class="dl-submenu">
                                <li><a href="gallery-medium.html">Gallery medium</a></li>
                                <li><a href="gallery-small.html">Gallery small</a></li>
                                <li><a href="gallery-mesnory.html">Masonry Gallery</a></li>
                            </ul>
                        </li>
                        <li class="menu-item mg-parent-menu">
                            <a href="contact-us.html">contact us</a>
                        </li>
                    </ul>
                </div> --}}
                <!--DL Menu END-->
                <!--Search Wrap Start-->
               
            
                {{-- <div class="iq_search pull-right">
                    <button data-toggle="modal" data-target="#search-box"><i class="fa fa-search"></i></button>
                </div>  --}}
                 
                <!--Search Wrap End-->
            </div>
            <!--Navigation wrap End-->
        </div>
        <!--Top Strip Wrap End-->
    </div>
</header>