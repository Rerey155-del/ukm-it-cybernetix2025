@extends('admin.layout.dashboard')

@section('content')
    <div class="grid grid-rows-2 gap-3 overflow-scroll-auto">
        <!-- Card besar kiri dan kanan -->
        <div class="grid grid-cols-3 gap-3">
            <!-- Card besar kiri -->
            <div class="rounded-3xl shadow col-span-2 h-full">
                <div class="skeleton h-full w-full flex items-center justify-center">okeee</div>
            </div>

            <!-- Wrapper 2 card kanan -->
            <div class="grid grid-rows-2 gap-3 h-full">
                <div class="rounded-3xl shadow">
                    <div class="skeleton h-full w-full"></div>
                </div>
                <div class="rounded-3xl shadow">
                    <div class="skeleton h-full w-full"></div>
                </div>
            </div>
        </div>


        <!-- Card kecil bawah -->
        <div class="grid grid-cols-3 gap-3">
            <div class="rounded-3xl shadow h-40">
                <div class="skeleton h-full w-full"></div>
            </div>
            <div class="rounded-3xl shadow h-40">
                <div class="skeleton h-full w-full"></div>
            </div>
            <div class="rounded-3xl shadow h-40">
                <div class="skeleton h-full w-full"></div>
            </div>
        </div>
    </div>
@endsection
