@extends('admin.layout.app')
@section('content')
    <div class="grid gap-6">
        <h1>Jumlah Anggota</h1>
        <!-- Card besar 1 kolom (full width dan center) -->
        <div class="card w-full mx-auto bg-base-100 shadow-lg">
            <div class="card-body flex flex-col items-center text-center h-[10rem]">
                <h2 class="card-title">Xlarge Card</h2>
                <p>
                    A card component has a figure, a body part, and inside body there are title and actions parts
                </p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <!-- Card kecil 3 kolom -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="card bg-base-100 shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">Small Card</h2>
                    <p>A smaller card example with title and actions.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">Small Card</h2>
                    <p>A smaller card example with title and actions.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-lg">
                <div class="card-body">
                    <h2 class="card-title">Small Card</h2>
                    <p>A smaller card example with title and actions.</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="flex justify-center mt-6">
            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
                Tambah Anggota
            </button>
        </div>
    </div>
@endsection
