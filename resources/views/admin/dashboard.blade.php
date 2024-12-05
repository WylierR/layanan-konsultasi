<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-blue-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-10">
        <h1 class="px-8 pb-10 font-semibold text-3xl">DAFTAR PERMOHONAN LAYANAN KONSULTASI INSPEKTORAT</h1>
        <div class="max-w-7xl mx-auto sm:px-6 px-12">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Admin Dashboard') }}
                </div>
            </div> --}}
            {{-- @if (Auth::user()->hasRole('admin'))
                @foreach ($unreadNotifications as $notification)
                    <div>
                        <p>Ada permohonan konsultasi baru dari {{ $notification->data['nama'] }}.</p>
                    </div>
                @endforeach
            @endif --}}



            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b">
                        <tr>
                            <th scope="col" class="px-6 py-4">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Jenis Layanan
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Pilih Layanan
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Jadwal
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    @forelse ($form as $data)
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->nama }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data->jenis_layanan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->pilih_layanan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->tanggal }}
                                </td>
                                <td class="px-6 py-4 text-left">
                                    <a href="{{ route('form.detail', $data->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                    Tidak ada data yang tersedia.
                                </td>
                            </tr>
                        </tbody>
                    @endforelse

                </table>
                <div class="px-6 py-2">
                    {{ $form->links() }}
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
