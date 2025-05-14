<x-end-user-layout>
    <x-slot:content>
        <x-enduser.dashbboard pageName="Profile">
            <x-slot:dashboardContent>
                <div class="wsus__dashboard_contant">
                    <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                        <div class="wsus__dashboard_heading">
                            <h5>Profile Details</h5>
                            <p>{{ Auth::user()->headline }}.</p>
                        </div>
                        <div class="wsus__dashboard_contant_btn">
                            <a href="{{ route('instructor.profile.edit', Auth::user()->id) }}" class="common_btn">
                                Edit Profile
                            </a>
                        </div>
                    </div>

                    <div class="wsus__dashboard_profile">
                        <div class="text ms-0">
                            <h6>About Me</h6>
                            <p>{{ Auth::user()->bio }}</p>
                        </div>
                    </div>

                    <ul class="wsus__dashboard_profile_info">
                        <li><span>Name :</span>{{ Auth::user()->name }}</li>
                        <li><span>Gender :</span>{{ Auth::user()->gender }}</li>
                        <li><span>Email :</span>{{ Auth::user()->email }}</li>
                    </ul>



                    <div class="wsus__dashboard_profile">
                        <div class="text ms-0">
                            <h6>Social links</h6>
                        </div>
                    </div>
                    <ul class="wsus__dashboard_profile_info">
                        <div class="container">
                            <div class=row>
                                @if (Auth::user()->facebook != null)
                                    <li class="col-md-2">
                                        <a href="{{ Auth::user()->facebook }}">
                                            <i class="fa-brands fa-facebook fa-3x" target="_blank"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->x != null)
                                    <li class="col-md-2">
                                        <a href="{{ Auth::user()->x }}">
                                            <i class="fa-brands fa-square-twitter fa-3x" target="_blank"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->linkedin != null)
                                    <li class="col-md-2">
                                        <a href="{{ Auth::user()->linkedin }}">
                                            <i class="fa-brands fa-linkedin fa-3x" target="_blank"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->website != null)
                                    <li class="col-md-2">
                                        <a href="{{ Auth::user()->website }}">
                                            <i class="fa-solid fa-globe fa-3x" target="_blank"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()->github != null)
                                    <li class="col-md-2">
                                        <a href="{{ Auth::user()->github }}">
                                            <i class="fa-brands fa-github fa-3x" target="_blank"></i>
                                        </a>
                                    </li>
                                @endif


                            </div>
                        </div>

                    </ul>
                </div>
            </x-slot>
        </x-enduser.dashbboard>
    </x-slot>
</x-end-user-layout>
