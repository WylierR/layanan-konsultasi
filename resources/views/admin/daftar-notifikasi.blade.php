<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-blue-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-10">
        <h1 class="px-8 pb-10 font-semibold text-3xl">Daftar Notifikasi</h1>
        <div class="max-w-7xl mx-auto sm:px-6 px-12">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                @if (Auth::user()->hasRole('admin'))
                    @foreach ($notifications as $notification)
                        @if (!isset($notification->data['bidang']))
                            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="{{ route('notifications.markasread', $notification->id) }}"
                                    class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="rounded-full w-11 h-11">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                        </svg>

                                    </div>
                                    <div class="w-full ps-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">Ada permohonan
                                            konsultasi baru dari <span
                                                class="font-semibold text-gray-900 dark:text-white">{{ $notification->data['nama'] }}</span>.
                                        </div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>

        </div>
    </div>
</x-admin-layout>
