@extends('admin.layout.app')
@section('content')
    <div class="grid gap-5" data-aos="fade-right">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl">Laporan Absen</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 h-[12rem]">
            <div class="card bg-base-100 shadow-lg rounded-3xl ">
                <div class="card-body">
                    <div class="flex space-x-1">
                        <img src="/img/cloud.png" alt="Database Icon" class="w-8 h-8">
                        <h2 class="card-title justify-start font-semibold">Total anggota Aktif</h2>
                    </div>
                    <div class="mx-auto flex justify-center items-center">
                        <p class="mt-4 font-bold text-4xl">
                            20
                        </p>
                    </div>
                </div>
            </div>

         
            <div class="card bg-base-100 shadow-lg rounded-3xl ">
                <div class="card-body">
                    <div class="flex space-x-1">
                        <img src="/img/device.png" alt="Database Icon" class="w-8 h-8">
                        <h2 class="card-title justify-start font-semibold">Total Anggota hadir</h2>
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
                        <h2 class="card-title justify-start font-semibold">Total Anggota Tidak Hadir</h2>
                    </div>
                    <div class="mx-auto flex justify-center items-center">
                        <p class="mt-4 font-bold text-4xl">
                            40
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card w-full mx-auto bg-base-100 shadow-lg rounded-3xl">
            <div class="card-body flex">
                <div class="flex space-x-1 justify-between items-center gap-4">
                    <div>
                        <h2 class="card-title  font-semibold">Laporan bulanan</h2>
                        <div class="flex space-x-4 mt-5">
                            <div class="flex flex-start space-x-1 ">
                                <div class="bg-[#6EEF77] w-4 h-4 rounded-sm"></div>
                                <span>Hadir</span>
                            </div>
                            <div class="flex flex-start space-x-1 ">
                                <div class = "bg-[#EF796E] w-4 h-4 rounded-sm"></div>
                                <span>tidak Hadir</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dropdown-bottom dropdown-end">
                        <div tabindex="0" role="button" class="btn m-1">Click ⬇️</div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a>Angkatan 14</a></li>
                            <li><a>Angkatan 15</a></li>

                        </ul>
                    </div>
                </div>
                <div class="mx-auto flex justify-center">
                    <canvas id="myChart" class="w-full max-w-4xl h-96"></canvas>
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

    <script>
        let myChartInstance = null;

        function renderChart() {
            const ctx = document.getElementById('myChart').getContext('2d');

            const data = {
                labels: ['4 September', '11 September', '18 September', '25 September'],
                datasets: [{
                        label: 'Hadir',
                        data: [20, 30, 25, 22],
                        backgroundColor: '#6EEF77',

                        borderSkipped: false
                    },
                    {
                        label: 'Tidak Hadir',
                        data: [15, 25, 20, 18],
                        backgroundColor: '#EF796E',

                        borderSkipped: false
                    }
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            };

            if (myChartInstance) {
                myChartInstance.destroy();
            }

            myChartInstance = new Chart(ctx, config);
        }

        // render saat pertama kali load
        document.addEventListener("DOMContentLoaded", () => {
            renderChart();
        });

        // toggle sidebar
        document.getElementById("toggleSidebar").addEventListener("click", function() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("-translate-x-full");

            // render ulang chart biar ukurannya menyesuaikan layout
            setTimeout(() => {
                renderChart();
            }, 300); // kasih delay sedikit biar sidebar selesai animasi
        });
    </script>
@endsection
