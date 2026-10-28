<header class="dashboard-topbar">


<button class="btn btn-primary d-lg-none me-3"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobileSidebar">

    <i class="fa-solid fa-bars"></i>

</button>

    <!-- Search -->
    <div class="dashboard-search-area">
        <input
            type="text"
            class="dashboard-search-input"
            placeholder="Search anything...">

        <button class="dashboard-search-btn">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>

    <!-- Right Side -->
    <div class="dashboard-right-area">

        <!-- Notification -->
        <div class="dashboard-notification-box">
            <i class="fa-regular fa-bell"></i>
            <span class="dashboard-notification-count">5</span>
        </div>

        <!-- Profile -->
        <div class="dashboard-profile-box">

            <img
                src="{{ asset('assets/images/profile.jpg') }}"
                alt="Profile"
                class="dashboard-profile-image">

            <div class="dashboard-profile-details">
                <h4>{{ Auth::user()->name }}</h4>
                <p>Administrator</p>
            </div>

            <div class="dashboard-profile-menu">

                <a href="#">
                    <i class="fa-regular fa-user"></i>
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

</header>
