<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-50">
    <div class="flex justify-center items-center min-h-screen pb-20">
        <div class="w-full max-w-4xl p-4 bg-white rounded-lg shadow-md">
            <div class="bg-blue-800 text-white p-6 rounded-lg">
                <h1 class="text-center text-2xl lg:text-4xl font-bold">LAYANAN KONSULTASI INSPEKTORAT</h1>
                <p class="text-center text-sm lg:text-base mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non hendrerit
                    sem, quis posuere purus. Sed venenatis, lorem molestie tempus faucibus, enim lectus pellentesque
                    augue, ut hendrerit augue odio vel dui.
                </p>
            </div>
            <div class="mt-6">
                <form action="{{ route('form.submit') }}" method="post" enctype="multipart/form-data"
                    class="container">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="email@email.com" required />
                    </div>
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama" required />
                    </div>
                    <div class="mb-6">
                        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                        <input type="text" id="jabatan" name="jabatan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Jabatan" required />
                    </div>
                    <div class="mb-6">
                        <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900">Instansi</label>
                        <input type="text" id="instansi" name="instansi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Instansi" required />
                    </div>
                    <div class="mb-6">
                        <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Nomor
                            Telepon</label>
                        <input type="text" id="nomor_telepon" name="nomor_telepon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="08xxxxxxxxx" required />
                    </div>
                    <div class="mb-6">
                        <label for="jenis_layanan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Layanan</label>
                        <select id="jenis_layanan" name="jenis_layanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Pengadaan Barang dan Jasa</option>
                            <option>Pengelolaan Keuangan Daerah</option>
                            <option>Pengelolaan Barang Milik Daerah</option>
                            <option>Kepegawaian</option>
                            <option>SPIP, SAKIP, RB</option>
                            <option>Manajemen Risiko</option>
                            <option>Permasalahan Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="pilih_layanan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Layanan</label>
                        <select id="pilih_layanan" name="pilih_layanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Online</option>
                            <option>Offline</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="jadwal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                            Jadwal</label>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-autohide" datepicker datepicker-autohide datepicker-buttons
                                    datepicker-autoselect-today type="text" name="tanggal"
                                    datepicker-format="dd/mm/yyyy"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Pilih Tanggal">
                            </div>
                            <div>
                                <select id="waktu" name="waktu"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>08.00 - 10.00</option>
                                    <option>10.00 - 12.00</option>
                                    <option>13.00 - 15.00</option>
                                    <option>15.00 - 17.00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="permasalahan"
                            class="block mb-2 text-sm font-medium text-gray-900">Permasalahan</label>
                        <input type="text" id="permasalahan" name="permasalahan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Permasalahan" required />
                    </div>
                    <div class="mb-6">
                        <label for="permasalahan" class="block mb-2 text-sm font-medium text-gray-900">Upload Bukti
                            Dukung</label>
                        <input type="text" id="link" name="link"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="link.com" />
                        <h5 class="ml-1 my-1  font-light">atau</h5>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" name="file" type="file">
                    </div>
                    <div class="flex justify-center">
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Kirim
                        </button>
                    </div>
                    <div id="popup-modal" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="popup-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah kamu
                                        yakin semua data yang diinput sudah benar?</h3>
                                    <button data-modal-hide="popup-modal" type="submit"
                                        class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Ya
                                    </button>
                                    <button data-modal-hide="popup-modal" type="button"
                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <footer class="bg-blue-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p class="text-sm">
                © 2024 Inspektorat DIY.
            </p>
        </div>
    </footer>

</body>

</html>
