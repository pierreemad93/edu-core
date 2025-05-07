<x-end-user-layout>
    <x-slot:content>
        <x-enduser.dashbboard pageName="student dashboard">
            <x-slot name="dashboardContent">
                <div class="row justify-content-end">
                    {{-- Become an instructor --}}
                    <div class="text-right col-md-4">
                        <a href={{ route('student.become-instructor') }} class="common_btn">
                            Become an instructor
                        </a>
                    </div>
                    {{-- ./Become an instructor --}}
                </div>
            </x-slot>
        </x-enduser.dashbboard>
    </x-slot>
</x-end-user-layout>
