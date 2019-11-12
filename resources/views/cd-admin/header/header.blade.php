<header class="main-header">
    <!-- Logo -->
    <a href="{{url('dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BG</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bhawani Group</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/cd-admin/images/avatar.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public/cd-admin/images/avatar.png')}}" class="img-circle" alt="User Image">

                            <p>
                           
                                {!! Auth::user()->name !!}
                                
                                <small>{{Auth::user()->role}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   
                    @if(auth::user()->role == 'superadmin')
                   <!--  <li class="active"><a href="{{url('/addadmin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> -->
                    @endif
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>
          
            <li class="header">Carousel</li>
            
            <li class="treeview">
                <a href="">
                   <i class="fa fa-picture-o"></i> <span>Carousel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                    
                    <li><a href="{{url('/carousel')}}"><i class="fa fa-circle-o"></i>View Carousel</a></li>
                    <li><a href="{{url('/addcarousel')}}"><i class="fa fa-circle-o"></i>Add Carousel</a></li>
                </ul>
            </li>
            <li class="header">About</li>
            
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-home"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                   
                   <!--  <li><a href="{{url('/about')}}"><i class="fa fa-circle-o"></i>Add About</a></li> -->
                     <li><a href="{{url('/aboutdetail')}}"><i class="fa fa-circle-o"></i>Show About</a></li>
                   
                </ul>
            </li>

            <li class="header">Section</li>
            
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-list-alt" aria-hidden="true"></i> <span>Section</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/section')}}"><i class="fa fa-circle-o"></i>View All Section</a></li>
                    
                    <li><a href="{{url('/addsection')}}"><i class="fa fa-circle-o"></i>Add Section</a></li>
                </ul>
            </li>

                        <li class="header">Work</li>
            
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-tasks" aria-hidden="true"></i> <span>Work</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/work')}}"><i class="fa fa-circle-o"></i>View Projects</a></li>
                    
                    <li><a href="{{url('/addwork')}}"><i class="fa fa-circle-o"></i>Add Project</a></li>
                </ul>
            </li>


            <li class="header">Services</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Services</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/allservice')}}"><i class="fa fa-circle-o"></i>View All Services</a></li>
                    
                    <li><a href="{{url('/addservice')}}"><i class="fa fa-circle-o"></i>Add Services</a></li>
                </ul>
            </li>

            <li class="header">Articles</li>
            
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-newspaper-o"></i> <span>Articles</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewarticle')}}"><i class="fa fa-circle-o"></i>View All Articles</a></li>
                    
                    <li><a href="{{url('/addarticle')}}"><i class="fa fa-circle-o"></i>Add Articles</a></li>
                </ul>
            </li>

            <li class="header">Designs</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Designs</span>
                    <span class="pull-right-container">
                         <span class="badge badge-info right"></span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/alldesign')}}"><i class="fa fa-circle-o"></i>View All Designs</a></li>
                    
                    <li><a href="{{url('/adddesign')}}"><i class="fa fa-circle-o"></i>Add Designs</a></li>
                </ul>
            </li>

            
             

                 <li class="header">Testimonial</li>
            
                <li class="treeview">
                <a href="#">
                    <i class="fa fa-star"></i> <span>Testimonial</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/testonomial')}}"><i class="fa fa-circle-o"></i>View Testimonial</a></li>
                    
                    <li><a href="{{url('/addtestonomial')}}"><i class="fa fa-circle-o"></i>Add Testimonial</a></li>
                </ul>
                </li>

                <li class="header">Teams</li>
            
                <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Teams</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/team')}}"><i class="fa fa-circle-o"></i>View Team</a></li>
                    
                    <li><a href="{{url('/addteam')}}"><i class="fa fa-circle-o"></i>Add Team</a></li>
                </ul>
                </li>
                <li class="header">Clients</li>
            
                <li class="treeview">
                <a href="#">
                   <i class="fa fa-users"></i> <span>Clients</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/clients')}}"><i class="fa fa-circle-o"></i>View Clients</a></li>
                    
                    <li><a href="{{url('/addclients')}}"><i class="fa fa-circle-o"></i>Add Clients</a></li>
                </ul>
                </li>

           <li class="header">Message</li>
           <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i><span>Message</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
                <ul class="treeview-menu">
                <li class="active"><a href="{{url('/viewcontact')}}"><i class="fa fa-circle-o"></i>View Inbox</a></li>
                 <li class="active"><a href="{{url('/replies')}}"><i class="fa fa-circle-o"></i>View Reply</a></li>
                </ul>
        </li>



                 <li class="header">SEO</li>
            
                <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle"></i> <span>SEO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="active"><a href="{{url('/addseo')}}"><i class="fa fa-circle-o"></i>Add Seo </a></li> -->
                    
                    <li><a href="{{url('/viewseo')}}"><i class="fa fa-circle-o"></i>View Seo</a></li>
                </ul>
                </li>
                <li class="header">Inquiry</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-question-circle" aria-hidden="true"></i> <span>Inquiry</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right"></span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewinquiry')}}"><i class="fa fa-circle-o"></i>View Inquiry</a></li>
                    
                    <li><a href="{{url('/inquiryreplies')}}"><i class="fa fa-circle-o"></i>View Reply</a></li>
                </ul>
            </li>


           

             {{-- <li class="header">News</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-copy"></i> <span>News</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/news-add')}}"><i class="fa fa-circle-o"></i>Add New News</a></li>
                    <li><a href="{{url('/news-view')}}"><i class="fa fa-circle-o"></i>View All News </a></li>
                </ul>
            </li>

            <li class="header">Event</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('events-add')}}"><i class="fa fa-circle-o"></i>Add New Event</a></li>
                    <li><a href="{{url('/events-view')}}"><i class="fa fa-circle-o"></i>View All Event </a></li>
                </ul>
            </li>

            <li class="header">Blog</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('blog-add')}}"><i class="fa fa-circle-o"></i>Add New Blog</a></li>
                    <li><a href="{{url('/blog-view')}}"><i class="fa fa-circle-o"></i>View All Blog </a></li>
                </ul>
            </li>

            <li class="header">Work</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Work</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('work-add')}}"><i class="fa fa-circle-o"></i>Add New Work</a></li>
                    <li><a href="{{url('/work-view')}}"><i class="fa fa-circle-o"></i>View All Work </a></li>
                </ul>
            </li>
            

             <li class="header">Video</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-video-camera"></i> <span>Video</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('videos-add')}}"><i class="fa fa-circle-o"></i>Add New video</a></li>
                    <li><a href="{{url('videos-view')}}"><i class="fa fa-circle-o"></i>View All videos</a></li>
                </ul>
            </li>


            <li class="header">Contact</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope "></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/contact-view')}}"><i class="fa fa-circle-o"></i>View All contact </a></li>
                </ul>
            </li> --}}

                 

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>