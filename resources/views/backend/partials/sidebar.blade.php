<div class="left-side-bar">
    <div class="brand-logo bg-white border-neutral-600">
        <a href="{{ route('admin.dashboard') }}">
            <img src="" alt="" />
            <h5>NCMT</h5>

        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.systemSetting.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">System Setting</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.slider.create')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Slider</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.notice.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-table"></span><span class="mtext">Notice</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.about.create')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">About</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.teacher.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Our Team</span>
                    </a>

                </li>
               
                <li class="dropdown">
                    <a href="{{route('admin.generalQuestion.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">GeneralQuestion</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.contact.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">Contact Messages</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="{{route('admin.enrollmentForm.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">Enquiry List</span>
                    </a>

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon bi bi-command"></span><span class="mtext">Gallery</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('admin.gallery.create')}}">Gallery Category</a></li>
                        <li><a href="{{route('admin.galleryPhoto.create')}}">Gallery List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-earmark-text"></span
                        ><span class="mtext">Our Programme</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('admin.programme.create')}}">Programme</a></li>
                        <li><a href="{{route('admin.semester.create')}}">Semester</a></li>
                        <li><a href="{{route('admin.course.index')}}">Couse Content</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
