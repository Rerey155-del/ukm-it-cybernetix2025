@extends('admin.layout.app')
@section('content')
    <div class="grid gap-6" data-aos="fade-right">
        <div class="flex justify-between items-center">
            <h1 class="font-bold ">Jumlah Anggota</h1>
            <div class="dropdown dropdown-bottom dropdown-end">
                <div tabindex="0" role="button" class="btn m-1">Click ⬇️</div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                    <li><a>Angkatan 14</a></li>
                    <li><a>Angkatan 15</a></li>

                </ul>
            </div>
        </div>
        <!-- Card besar 1 kolom (full width dan center) -->
        <div class="card w-full mx-auto bg-base-100 shadow-lg rounded-3xl">
            <div class="card-body flex flex-col items-start h-[10rem]">
                <div class="flex space-x-1">
                    <img src="/img/database.png" alt="Database Icon" class="w-8 h-8">
                    <h2 class="card-title justify-start font-semibold">Semua</h2>
                </div>
                <div class="mx-auto flex justify-center">
                    <p class="text-center items-center mt-4 font-bold text-4xl">
                        167
                    </p>
                </div>
            </div>
        </div>

        <!-- Card kecil 3 kolom -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
            <div class="card bg-base-100 shadow-lg rounded-3xl">
                <div class="card-body">
                    <div class="flex space-x-1">
                        <img src="/img/cloud.png" alt="Database Icon" class="w-8 h-8">
                        <h2 class="card-title justify-start font-semibold">Divisi Networking</h2>
                    </div>
                    <div class="mx-auto flex justify-center items-center">
                        <p class="mt-4 font-bold text-4xl">
                            20
                        </p>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-lg rounded-3xl">
                <div class="card-body">
                    <div class="flex space-x-1">
                        <img src="/img/device.png" alt="Database Icon" class="w-8 h-8">
                        <h2 class="card-title justify-start font-semibold">Divisi Programming</h2>
                    </div>
                    <div class="mx-auto flex justify-center items-center">
                        <p class="mt-4 font-bold text-4xl">
                            67
                        </p>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-lg rounded-3xl">
                <div class="card-body">
                    <div class="flex space-x-1">
                        <img src="/img/paint.png" alt="Database Icon" class="w-8 h-8">
                        <h2 class="card-title justify-start font-semibold">Divisi Multimedia</h2>
                    </div>
                    <div class="mx-auto flex justify-center items-center">
                        <p class="mt-4 font-bold text-4xl">
                            40
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="flex justify-center mt-6">
            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 font-semibold">
                Tambah Anggota
            </button>
        </div>
    </div>
@endsection
