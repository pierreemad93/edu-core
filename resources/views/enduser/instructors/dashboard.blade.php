<x-end-user-layout>
    <x-slot:content>
        <x-enduser.dashbboard pageName="Instructor dashboard">
            <x-slot name="dashboardContent">
                @if (Auth::user()->approve_status == 'pending')
                    <div class="alert alert-info" role="alert">
                        Hello {{ Auth::user()->name }} , your instructor request pending , we we send a mail on
                        your email
                        when request is approved
                    </div>
                @elseif (Auth::user()->approve_status == 'rejected')
                    <div class="alert alert-danger" role="alert">
                        Hello {{ Auth::user()->name }} , your instructor request has been rejected
                    </div>
                @endif

                <div class="row">
                    <div class="col-xl-4 col-sm-6 wow fadeInUp">
                        <div class="wsus__dash_earning">
                            <h6>REVENUE</h6>
                            <h3>$2456.34</h3>
                            <p>Earning this month</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow fadeInUp">
                        <div class="wsus__dash_earning">
                            <h6>STUDENTS ENROLLMENTS</h6>
                            <h3>16,450</h3>
                            <p>Progress this month</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow fadeInUp">
                        <div class="wsus__dash_earning">
                            <h6>COURSES RATING</h6>
                            <h3>4.70</h3>
                            <p>Rating this month</p>
                        </div>
                    </div>
                </div>

                <div class="wsus__dashboard_chat_graps">
                    <div class="row">
                        <div class="col-xl-8 wow fadeInRight">
                            <div class="wsus__dashboard_graph">
                                <h5>Earnings</h5>
                                <div class="example-two"></div>
                            </div>
                        </div>
                        <div class="col-xl-4 wow fadeInRight">
                            <div class="wsus__dashboard_barfiller">
                                <h5>Complated Course</h5>
                                <div class="single_bar">
                                    <p>Java Code</p>
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill orrange" data-percentage="75"></span>
                                    </div>
                                </div>
                                <div class="single_bar">
                                    <p>Design Basic</p>
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="65"></span>
                                    </div>
                                </div>
                                <div class="single_bar">
                                    <p>Team Building</p>
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill megenda" data-percentage="55"></span>
                                    </div>
                                </div>
                                <div class="single_bar">
                                    <p>Business Marketing</p>
                                    <div id="bar4" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill merun" data-percentage="45"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wsus__dashboard_contant">
                    <div class="wsus__dashboard_contant_top">
                        <div class="wsus__dashboard_heading wow fadeInUp">
                            <h5>Best Selling Courses</h5>
                        </div>
                    </div>

                    <div class="wsus__dash_course_table wow fadeInUp">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="image">
                                                    COURSES
                                                </th>
                                                <th class="details">

                                                </th>
                                                <th class="sale">
                                                    SALES
                                                </th>
                                                <th class="amount">
                                                    AMOUNT
                                                </th>
                                            </tr>
                                            <tr>
                                                <td class="image">
                                                    <div class="image_category">
                                                        <img src="{{ asset('enduser/assets') }}/images/courses_3_img_1.jpg"
                                                            alt="img" class="img-fluid w-100">
                                                    </div>
                                                </td>
                                                <td class="details">
                                                    <p class="rating">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                        <i class="far fa-star" aria-hidden="true"></i>
                                                        <span>(5.0)</span>
                                                    </p>
                                                    <a class="title" href="#">Complete Blender Creator
                                                        Learn
                                                        3D Modelling.</a>

                                                </td>
                                                <td class="sale">
                                                    <p>34</p>
                                                </td>
                                                <td class="amount">
                                                    <p>$3,145.23</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="image">
                                                    <div class="image_category">
                                                        <img src="{{ asset('enduser/assets') }}/images/courses_3_img_2.jpg"
                                                            alt="img" class="img-fluid w-100">
                                                    </div>
                                                </td>
                                                <td class="details">
                                                    <p class="rating">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                        <i class="far fa-star" aria-hidden="true"></i>
                                                        <span>(5.0)</span>
                                                    </p>
                                                    <a class="title" href="#">Complete Blender Creator
                                                        Learn
                                                        3D Modelling.</a>

                                                </td>
                                                <td class="sale">
                                                    <p>34</p>
                                                </td>
                                                <td class="amount">
                                                    <p>$3,145.23</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="image">
                                                    <div class="image_category">
                                                        <img src="{{ asset('enduser/assets') }}/images/courses_3_img_3.jpg"
                                                            alt="img" class="img-fluid w-100">
                                                    </div>
                                                </td>
                                                <td class="details">
                                                    <p class="rating">
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star" aria-hidden="true"></i>
                                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                        <i class="far fa-star" aria-hidden="true"></i>
                                                        <span>(5.0)</span>
                                                    </p>
                                                    <a class="title" href="#">Complete Blender Creator
                                                        Learn
                                                        3D Modelling.</a>

                                                </td>
                                                <td class="sale">
                                                    <p>34</p>
                                                </td>
                                                <td class="amount">
                                                    <p>$3,145.23</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-enduser.dashbboard>


    </x-slot>
</x-end-user-layout>
