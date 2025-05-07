<x-admin-app-layout>
    <x-slot name="content">
        <h2 class="page-title py-2">Instructor request</h2>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Document</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($instructorRequests as $instructor)
                            <tr>
                                <td>{{ $instructor->name }}</td>

                                <td class="text-secondary">
                                    <a href="#" class="text-reset">{{ $instructor->email }}</a>
                                </td>
                                <td class="text-secondary">
                                    @if ($instructor->approve_status == 'pending')
                                        <span class="badge bg-yellow-lt">{{ $instructor->approve_status }}</span>
                                    @else
                                        <span class="badge bg-red-lt">{{ $instructor->approve_status }}</span>
                                    @endif

                                </td>
                                <td class="text-secondary">
                                    <a href="{{ route('admin.instructor-request.download', $instructor->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                            <path d="M7 11l5 5l5 -5" />
                                            <path d="M12 4l0 12" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <div x-data="{
                                        submitStatusForm(event) {
                                            const form = document.querySelector('.status-{{ $instructor->id }}');
                                            form.querySelector('input[name=status]').value = event.target.value;
                                            form.submit();
                                        }
                                    }">
                                        <select @change="submitStatusForm" name="status" class="form-select">
                                            <option @selected($instructor->approve_status == 'pending') value="pending">Pending</option>
                                            <option @selected($instructor->approve_status == 'approved') value="approved">Approved</option>
                                            <option @selected($instructor->approve_status == 'rejected') value="rejected">Rejected</option>
                                        </select>
                                    </div>

                                    <form class="status-{{ $instructor->id }}" method="POST"
                                        action="{{ route('admin.instructor-request.update', $instructor->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="100%">
                                    No Requests found
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-slot>
</x-admin-app-layout>
