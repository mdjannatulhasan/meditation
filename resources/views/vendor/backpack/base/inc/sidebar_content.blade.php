<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('slider') }}'><i class='nav-icon la la-question'></i> Sliders</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-question'></i> Categories</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('event') }}'><i class='nav-icon la la-question'></i> Events</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('testimonial') }}'><i class='nav-icon la la-question'></i> Testimonials</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('course-stub') }}'><i class='nav-icon la la-question'></i> Course stubs</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('gallary') }}'><i class='nav-icon la la-question'></i> Gallaries</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('video') }}'><i class='nav-icon la la-question'></i> Videos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>