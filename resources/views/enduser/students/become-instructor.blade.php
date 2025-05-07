<x-end-user-layout>
    <x-slot:content>
        <!--===========================
        BREADCRUMB START
    ============================-->
        <section class="wsus__breadcrumb"
            style="background: url({{ asset('enduser/assets') }}/images/breadcrumb_bg.jpg);">
            <div class="wsus__breadcrumb_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 wow fadeInUp">
                            <div class="wsus__breadcrumb_text">
                                <h1>Become instructor</h1>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>become instructor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===========================
        BREADCRUMB END
    ============================-->


        <!--===========================
        DASHBOARD OVERVIEW START
    ============================-->
        <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-4 wow fadeInLeft">
                        <div class="wsus__dashboard_sidebar">
                            <div class="wsus__dashboard_sidebar_top">
                                <div class="dashboard_banner">
                                    <img src="{{ asset('enduser/assets') }}/images/single_topic_sidebar_banner.jpg"
                                        alt="img" class="img-fluid">
                                </div>
                                <div class="img">
                                    <img src="{{ asset('enduser/assets') }}/images/dashboard_profile_img.png"
                                        alt="profile" class="img-fluid w-100">
                                </div>
                                <h4>{{ Auth::user()->name }}</h4>
                                <p>{{ Auth::user()->role }}</p>
                            </div>
                            <ul class="wsus__dashboard_sidebar_menu">
                                <li>
                                    <a href="dashboard.html" class="active">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_8.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_profile.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_1.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_courses.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_2.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Courses
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_review.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_4.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Reviews
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_order.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_5.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_student.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_6.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Students
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_payout.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_7.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Payouts
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_support.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_8.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Support Tickets
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_security.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_10.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Security
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_social_account.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_11.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Social Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_notification.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_12.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard_privacy.html">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_13.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Profile Privacy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img">
                                            <img src="{{ asset('enduser/assets') }}/images/dash_icon_16.png"
                                                alt="icon" class="img-fluid w-100">
                                        </div>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-9 col-md-8">
                        {{-- content --}}
                        <div class="col-xl-12 col-sm-12 ">
                            <div class="wsus__dash_earning">
                                <form action="{{ route('student.become-instructor.doc', Auth::user()->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>Upload Cv Or Cretficate</label>
                                    <input type="file" class="form-control" name="document">
                                    <x-input-error :messages="$errors->get('document')" class="mt-2" />

                                    <button type="submit" class="btn btn-primary">upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===========================
        DASHBOARD OVERVIEW END
    ============================-->

    </x-slot>
</x-end-user-layout>
