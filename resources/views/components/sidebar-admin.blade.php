<!-- Sidebar -->
<aside :class="{ '-translate-x-full': !open }"
    class="z-10 min-h-screen w-64 bg-white absolute inset-y-0 md:relative transform md:translate-x-0 overflow-y-auto transition ease-in-out duration-200 shadow-lg">
    <!-- Logo -->
    <div class=" bg-blue-800 text-white h-36">
        <div class="flex items-center justify-between px-2 pt-10 pb-6">
            <div class="flex items-center">
                <a href="" class="mx-2">
                    <img class="size-16" src="{{ asset('images/logo_pemda.png') }}" alt="">
                    {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" /> --}}
                </a>
                <span class="text-2xl font-extrabold">Inspektorat DIY</span>
            </div>
            <button type="button" @click="open = !open"
                class="sm:hidden inline-flex p-2 items-center justify-center rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="block size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>

            </button>

        </div>
    </div>
    <!-- Navbar Link -->
    <nav class="pt-10 bg-white min-h-screen">
        <ul>
            <li class="py-4 px-8 hover:bg-gray-200 text-blue-800">
                <a href="/admin">Dashboard</a>
            </li>
            <li class="py-4 px-8 hover:bg-gray-200 text-blue-800">
                <a href="/admin/bidang">Bidang</a>
            </li>
            <li class="py-4 px-8 hover:bg-gray-200 text-blue-800">
                <a href="/admin/jadwal">Jadwal</a>
            </li>
            <li class="py-4 px-8 hover:bg-gray-200 text-blue-800">
                <a href="#">Riwayat</a>
            </li>
            <li class="py-4 px-8 hover:bg-gray-200 text-blue-800">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Keluar') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </li>
        </ul>
    </nav>
</aside>
