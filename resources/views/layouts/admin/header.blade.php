<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{ asset('assets/backend/images/wd.png') }}" width="25" alt="WD"><span class="m-l-10">Admin</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('assets/backend/images/profile.png') }}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="{{ route('slider.add') }}"><i class="zmdi zmdi-view-carousel"></i><span>Slider</span></a></li>
            <li><a href="{{ route('about.add') }}"><i class="zmdi zmdi-nature-people"></i><span>About</span></a></li>
            <li><a href="{{ route('portfolio.add') }}"><i class="zmdi zmdi-collection-image-o"></i><span>Portfolio</span></a></li>
            <li><a href="{{ route('header.settings') }}"><i class="zmdi zmdi-settings-square"></i><span>Header Settings</span></a></li>
            <li><a href="{{ route('services.add') }}"><i class="zmdi zmdi-group-work"></i><span>Services</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Sections</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('activity.add') }}">Activity</a></li>
                    <li><a href="{{ route('appoint.add') }}">Appoint</a></li>
                    <li><a href="{{ route('brands.add') }}">Brands</a></li>
                    <li><a href="{{ route('offer.add') }}">Offer</a></li>
                    <li><a href="{{ route('footer.add') }}">Operating Hours</a></li>
                    <li><a href="{{ route('testimonial.add') }}">Testimonials</a></li>
                    <li><a href="{{ route('skills.add') }}">Skills</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Pages</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('faq.add') }}">FAQ</a></li>
                    <li><a href="{{ route('privacy.policy.show') }}">Privacy Policy</a></li>
                </ul>
            </li>
            <li class="open"><a href="{{ route('logout') }}"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
        </ul>
    </div>
</aside>
