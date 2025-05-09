<div class="wsus__dashboard_sidebar">
    <div class="wsus__dashboard_sidebar_top">
        <div class="dashboard_banner">
            <img src="{{ asset('enduser/assets') }}/images/single_topic_sidebar_banner.jpg" alt="img"
                class="img-fluid">
        </div>
        <div class="img">
            <img src="{{ asset('enduser/assets') }}/images/dashboard_profile_img.png" alt="profile"
                class="img-fluid w-100">
        </div>
        <h4>{{ Auth::user()->name }}</h4>
        <p>{{ Auth::user()->role }}</p>
    </div>
    <ul class="wsus__dashboard_sidebar_menu">
        {{ $navLink }}
       
        <li>
            <a href="#">
                <div class="img">
                    <img src="{{ asset('enduser/assets') }}/images/dash_icon_16.png" alt="icon"
                        class="img-fluid w-100">
                </div>
                Sign Out
            </a>
        </li>
    </ul>
</div>
