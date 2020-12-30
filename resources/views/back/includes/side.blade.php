<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

        <div>
            <p class="app-sidebar__user-name text-white text-center">{{Auth::user()->name}}</p>
            <br>

        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('admin.home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item active" href="{{route('admin.index')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Admin</span></a></li>
       <!--  <li><a class="app-menu__item active" href="{{route('service')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">What we Provide</span></a></li> -->

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">What we Provide</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('category.index')}}"><i class="icon fa fa-circle-o"></i>Heading</a></li>
                <li><a class="treeview-item" href="{{route('service')}}"><i class="icon fa fa-circle-o"></i>Services</a></li>
               

            </ul>
        </li>
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Why Choose Us</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('category.index')}}"><i class="icon fa fa-circle-o"></i>Heading</a></li>
                <li><a class="treeview-item" href="{{route('service')}}"><i class="icon fa fa-circle-o"></i>Choose</a></li>
               

            </ul>
        </li>
        <li><a class="app-menu__item" href="{{route('featuredimage')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Logo</span></a></li>
        <li><a class="app-menu__item active" href="{{route('aboutus')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">About Us</span></a></li>
        <li><a class="app-menu__item active" href="{{route('classes')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Classes</span></a></li>
         <li><a class="app-menu__item active" href="{{route('choose')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Why Choose us</span></a></li>
        <li><a class="app-menu__item active" href="{{route('portfollio')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Portfollio</span></a></li>
         <li><a class="app-menu__item active" href="{{route('portfollio')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Study Abroad</span></a></li>
          <li><a class="app-menu__item active" href="{{route('research')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Top Universities</span></a></li>
       
       <li><a class="app-menu__item active" href="{{route('team')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Testimonials</span></a></li>
      
        <li><a class="app-menu__item active" href="{{route('page')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Pages</span></a></li>
        <li><a class="app-menu__item active" href="{{route('qutoe')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Qutoe Message</span></a></li>

        <li><a class="app-menu__item active" href="{{route('footer')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Footer</span></a></li>
       
        {{--<li><a class="app-menu__item active" href="{{route('heading')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Heading</span></a></li>--}}
        <li><a class="app-menu__item active" href="{{route('video')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Video</span></a></li>
        <li><a class="app-menu__item active" href="{{route('message')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Contact</span></a></li>
        <li><a class="app-menu__item active" href="{{route('register')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Register</span></a></li>
        <li><a class="app-menu__item active" href="{{route('gallery.index')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Gallery</span></a></li>
        <li><a class="treeview-item" href="{{route('shortnotice')}}"><i class="icon fa fa-circle-o"></i> Shortnotice</a></li>
        {{--<li><a class="app-menu__item active" href="{{route('comment')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Comment</span></a></li>--}}
        <li><a class="treeview-item" href="{{route('banner')}}"><i class="icon fa fa-circle-o"></i>Banner</a></li>
       <!--  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Catalog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
               
                <li><a class="treeview-item" href="{{route('saubcat')}}"><i class="icon fa fa-circle-o"></i>Sub Category</a></li>
                
               {{-- <li><a class="treeview-item" href="{{route('subcategory.index')}}"><i class="icon fa fa-circle-o"></i>Subcategory</a></li>--}}

            </ul>
        </li> -->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Product Section</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('productcategory')}}"><i class="icon fa fa-circle-o"></i>Product Category</a></li>
                <li><a class="treeview-item" href="{{route('productsubcategory')}}"><i class="icon fa fa-circle-o"></i>Product Sub-Category</a></li>
                <li><a class="treeview-item" href="{{route('item')}}"><i class="icon fa fa-circle-o"></i>Product Section</a></li>
                {{-- <li><a class="treeview-item" href="{{route('subcategory.index')}}"><i class="icon fa fa-circle-o"></i>Subcategory</a></li>--}}
            </ul>
        </li>


      <!-- <li><a class="app-menu__item active" href=""><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Slider</span></a></li>
-->

    </ul>
</aside>
<main class="app-content">