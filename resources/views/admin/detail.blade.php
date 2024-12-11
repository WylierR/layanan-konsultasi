<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-blue-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-4 pb-40">
        <div class="px-8 py-4">
            <a href="{{ route('form.tampil') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-10">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
        </div>
        <h1 class="px-8 pb-10 font-semibold text-3xl">DAFTAR PERMOHONAN LAYANAN KONSULTASI INSPEKTORAT</h1>
        <div class="max-w-7xl mx-auto sm:px-6 px-12">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Admin Dashboard') }}
                </div>
            </div> --}}



            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class=" text-gray-700 dark:text-gray-400">
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                Detail Permohonan
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Email
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->email }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Nama
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->nama }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Jabatan
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->jabatan }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Instansi
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->instansi }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Nomor Telepon
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->nomor_telepon }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Jenis Layanan
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->jenis_layanan }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Pilih Layanan
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->pilih_layanan }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Tanggal
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->tanggal }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Waktu
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->waktu }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Permasalahan
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->permasalahan }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                Link
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                {{ $form->link }}
                            </td>

                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row"
                                class="w-1/6 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                File
                            </th>
                            <td class="w-1/16 px-6 py-4">
                                :
                            </td>
                            <td class="w-3/4 px-6 py-4">
                                <a href="{{ asset('storage/' . $form->file) }}" target="_blank"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">File</a>

                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>


            <form action="{{ route('form.addbidang', $form->id) }}" method="POST" class="max-w-sm py-10">
                @csrf
                <label>Tambah Bidang</label>
                <select name="bidang"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Bidang</option>
                    <option>Pemerintahan</option>
                    <option>Sosial Budaya</option>
                    <option>Sarana dan Prasarana</option>
                    <option>Perekonomian</option>
                </select>
                <button type="submit"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah</button>
            </form>
        </div>
    </div>
</x-admin-layout>
