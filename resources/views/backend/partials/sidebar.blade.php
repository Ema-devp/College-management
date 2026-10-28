 <aside class="dashboard-sidebar">

        <div class="dashboard-logo">

            <img src="{{ asset('assets/images/logo.png') }}" alt="">

            <div>

                <h3>Canyon College</h3>

                <span>Management System</span>

            </div>

        </div>

        <ul class="dashboard-menu">

            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
    <a href="{{ route('admin.dashboard') }}">
        <i class="fa-solid fa-house"></i>
        Dashboard
    </a>
</li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-user-graduate"></i>
                    Students
                </a>
            </li>



              <li class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}">
        <i class="fa-solid fa-book-open"></i>
        Courses
    </a>
</li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-building"></i>
                    Departments
                </a>
            </li>

            <li>
                <a href="{{ route('admissions.index') }}">
                   <i class="fa-solid fa-user-plus"></i> Admissions
                     </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-file-lines"></i>
                    Examinations
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-calendar-check"></i>
                    Attendance
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-book"></i>
                    Library
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-calendar-days"></i>
                    Events
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-bullhorn"></i>
                    Notices
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-users"></i>
                    Users
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-user-shield"></i>
                    Roles & Permissions
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    Settings
                </a>
            </li>

        </ul>


        <!--==========================
    Sidebar Profile
===========================-->

<div class="sidebar-profile">

    <img src="{{ asset('assets/images/profile.jpg') }}" alt="Admin">

    <div class="sidebar-profile-info">
        <h4>{{ Auth::user()->name ?? 'Emamur Rashid' }}</h4>
        <p>Administrator</p>
    </div>

    <div class="sidebar-profile-menu">

        <i class="fa-solid fa-chevron-down"></i>

        <div class="sidebar-dropdown">

            <a href="#">
                <i class="fa-solid fa-user"></i>
                My Profile
            </a>

            <a href="#">
                <i class="fa-solid fa-gear"></i>
                Settings
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </button>
            </form>

        </div>

    </div>

</div>

    </aside>