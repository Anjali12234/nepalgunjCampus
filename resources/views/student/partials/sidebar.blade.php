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
                    <a href="{{route('student.teacher.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Teacher</span>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
