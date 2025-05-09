{{-- Start bread Crumb --}}
<x-enduser.dashboard.bread-crumb :pageName="$pageName" />
{{-- end bread Crumb --}}

<section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4 wow fadeInLeft">
                <x-enduser.dashboard.sidebar>
                    <x-slot:navLink>
                        <x-enduser.dashboard.nav-link :route="route('student.dashboard')" :isActive="request()->routeIs('student.dashboard')" :icon="asset('enduser/assets/images/dash_icon_8.png')"
                            pageName="Dashboard" />
                        <x-enduser.dashboard.nav-link :route="route('student.profile')" :isActive="request()->routeIs('student.profile')" :icon="asset('enduser/assets/images/dash_icon_1.png')"
                            pageName="profile" />
                        </li>
                    </x-slot>
                </x-enduser.dashboard.sidebar>
            </div>

            <div class="col-xl-9 col-md-8">
                {{ $dashboardContent }}
            </div>
        </div>
    </div>
</section>
<!--===========================
DASHBOARD OVERVIEW END
============================-->
