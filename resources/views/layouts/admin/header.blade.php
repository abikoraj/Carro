<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{ asset('assets/backend/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('assets/backend/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="{{ route('slider.add') }}"><i class="zmdi zmdi-view-carousel"></i><span>Slider</span></a></li>
            <li class="open"><a href="{{ route('about.add') }}"><i class="zmdi zmdi-nature-people"></i><span>About</span></a></li>
            <li class="open"><a href="{{ route('portfolio.add') }}"><i class="zmdi zmdi-collection-image-o"></i><span>Portfolio</span></a></li>
            {{-- <li class="open"><a href="{{ route('brands.add') }}"><i class="zmdi zmdi-accounts-list"></i><span>Brands</span></a></li> --}}
            <li class="open"><a href="{{ route('header.settings') }}"><i class="zmdi zmdi-settings-square"></i><span>Header Settings</span></a></li>
            {{-- <li class="open"><a href="{{ route('testimonial.add') }}"><i class="zmdi zmdi-comment-alt-text"></i><span>Testimonials</span></a></li> --}}
            <li class="open"><a href="{{ route('services.add') }}"><i class="zmdi zmdi-group-work"></i><span>Services</span></a></li>
            {{-- <li class="open"><a href="{{ route('activity.add') }}"><i class="zmdi zmdi-google-pages"></i><span>Activity</span></a></li> --}}
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Sections</span></a>
                <ul class="ml-menu">
                    <li><a href="{{ route('activity.add') }}">Activity</a></li>
                    <li><a href="{{ route('brands.add') }}">Brands</a></li>
                    <li><a href="{{ route('testimonial.add') }}">Testimonials</a></li>
                    <li><a href="{{ route('skills.add') }}">Skills</a></li>
                </ul>
            </li>
            {{-- <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Projects</span></a>
                <ul class="ml-menu">
                    <li><a href="project-list.html">Projects List</a></li>
                    <li><a href="taskboard.html">Taskboard</a></li>
                    <li><a href="ticket-list.html">Ticket List</a></li>
                    <li><a href="ticket-detail.html">Ticket Detail</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span></a>
                <ul class="ml-menu">
                    <li><a href="file-dashboard.html">All File</a></li>
                    <li><a href="file-documents.html">Documents</a></li>
                    <li><a href="file-images.html">Images</a></li>
                    <li><a href="file-media.html">Media</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font Icons</span></a>
                <ul class="ml-menu">
                    <li><a href="icons.html">Material Icons</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-weather.html">Weather Icons</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                <ul class="ml-menu">
                    <li><a href="normal-tables.html">Normal Tables</a></li>
                    <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                    <li><a href="editable-table.html">Editable Tables</a></li>
                    <li><a href="footable.html">Foo Tables</a></li>
                    <li><a href="table-color.html">Tables Color</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                <ul class="ml-menu">
                    <li><a href="widgets-app.html">Apps Widgets</a></li>
                    <li><a href="widgets-data.html">Data Widgets</a></li>
                </ul>
            </li> --}}

            <li class="open"><a href="{{ route('logout') }}"><i class="zmdi zmdi-power"></i><span>Logout</span></a></li>
        </ul>
    </div>
</aside>
