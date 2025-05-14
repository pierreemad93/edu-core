<x-end-user-layout>
    <x-slot:content>
        <x-enduser.dashbboard pageName="Edit Profile">
            <x-slot:dashboardContent>
                <div class="wsus__dashboard_contant">
                    <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                        <div class="wsus__dashboard_heading">
                            <h5>Update Your Information</h5>
                            <p>Manage your courses and its update like live, draft and insight.</p>
                        </div>
                        <div class="wsus__dashboard_profile_delete">
                            <a href="#" class="common_btn">Delete Profile</a>
                        </div>
                    </div>
                    {{-- Student profile --}}
                    <form action="{{ route('student.profile.update', Auth::user()->id) }}" method="post"
                        class="wsus__dashboard_profile_update" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="wsus__dashboard_profile wsus__dashboard_profile_avatar">
                            <div class="img">
                                <img src="{{ asset('') }}{{ Auth::user()->image }}" alt="profile"
                                    class="img-fluid w-100">
                                <label for="profile_photo">
                                    <img src="{{ asset('enduser/assets') }}/images/dash_camera.png" alt="camera"
                                        class="img-fluid w-100">
                                </label>
                                <input type="file" id="profile_photo" name="avatar" hidden="">
                            </div>
                            <div class="text">
                                <h6>Your avatar</h6>
                                <p>PNG or JPG no bigger than 400px wide and tall.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>Full name</label>
                                    <input type="text" placeholder="Enter your Full name" name="name"
                                        value="{{ Auth::user()->name }}">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter your mail" name="email"
                                        value="{{ Auth::user()->email }}">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>headline</label>
                                    <input type="text" placeholder="Enter headline" name="headline"
                                        value="{{ Auth::user()->headline }}">

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>bio</label>
                                    <textarea rows="7" placeholder="Your text here" name="bio">
                                        {{ Auth::user()->bio }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__dashboard_profile_update_btn">
                                    <button type="submit" class="common_btn">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- SocialMedia links --}}
                    <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                        <div class="wsus__dashboard_heading">
                            <h5>Update Your Social Media links</h5>
                        </div>
                    </div>
                    <form action="{{ route('student.profile.update-social-links', Auth::user()->id) }}"
                        method="POST"class="wsus__dashboard_profile_update">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>FaceBook</label>
                                    <input type="url" placeholder="Enter your Facebook" name="facebook">
                                    <x-input-error :messages="$errors->get('facebook')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>x</label>
                                    <input type="url" placeholder="Enter your x" name="x">
                                    <x-input-error :messages="$errors->get('x')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>linkedin</label>
                                    <input type="url" placeholder="Enter your linkedin" name="linkedin">
                                    <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>github</label>
                                    <input type="url" placeholder="Enter your github" name="github">
                                    <x-input-error :messages="$errors->get('github')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>website</label>
                                    <input type="url" placeholder="Enter your website" name="website">
                                    <x-input-error :messages="$errors->get('website')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="wsus__dashboard_profile_update_btn">
                                    <button type="submit" class="common_btn">Update Social media</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- ./SocialMedia links --}}
                    {{-- Update password --}}
                    <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                        <div class="wsus__dashboard_heading">
                            <h5>Update Your Password</h5>
                        </div>
                    </div>
                    <form action="{{ route('student.profile.update-password', Auth::user()->id) }}" method="POST"
                        class="wsus__dashboard_profile_update">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>Current password</label>
                                    <input type="password" placeholder="Enter your current password"
                                        name="current_password">
                                    <x-input-error :messages="$errors->get('current_password')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>new Password</label>
                                    <input type="password" placeholder="Enter your current password" name="password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wsus__dashboard_profile_update_info">
                                    <label>confirm password</label>
                                    <input type="password" placeholder="Enter your current password"
                                        name="password_confirmation">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="wsus__dashboard_profile_update_btn">
                                    <button type="submit" class="common_btn">Update Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- ./Update password --}}
                </div>
            </x-slot>
        </x-enduser.dashbboard>
    </x-slot>
</x-end-user-layout>
