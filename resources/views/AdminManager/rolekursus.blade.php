@extends('layout.layout')

@php
    $title = 'Kelola Akun Admin';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/role.js') . '"></script>';
@endphp

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap my-3 gap-3">

            <!-- Kiri: Filter + Status + Pencarian -->
            <div class="d-flex align-items-center gap-2 flex-wrap">

                <!-- Filter Button -->
                <button class="btn btn-light border shadow-sm d-flex align-items-center gap-2">
                    <iconify-icon icon="tabler:filter"></iconify-icon>
                    Filter
                </button>

                <!-- Search Box -->
                <div class="input-group shadow-sm" style="max-width: 250px;">
                    <span class="input-group-text bg-white border-end-0">
                        <iconify-icon icon="tabler:search"></iconify-icon>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Pencarian">
                </div>

            </div>

            <!-- Kanan: Tambah Peran -->
            <div>
                <a href="{{ route('tambahperan') }}">
                    <button class="btn btn-primary shadow-sm" style="background-color: blue;">
                        + Tambah Peran
                    </button>
                </a>
            </div>

        </div>


        <div class="row gy-4 mt-1">
            <div class="col-xxl-6">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th class="text-center">
                                    <div class="dropdown">
                                        <div class="btn-light dropdown-toggle text-start" id="dropdownRole"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Role
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownRole">
                                            <li>
                                                <a class="dropdown-item" href="#" onclick="handleStatusChange('admin-kursus')">Admin Kursus</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" onclick="handleStatusChange('admin-perusahaan')">Admin Perusahaan</a>
                                            </li>
                                        </ul>  
                                    </div>
                                </th>
                                <th scope="col text-center">
                                    <div class="dropdown">
                                        <div class="btn-light dropdown-toggle text-start" id="dropdownRole"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Status
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownRole">
                                            <li><a class="dropdown-item" href="#">Aktif</a></li>
                                            <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/managers/Bapak-Bapak-Berjas.png') }}"
                                            class="rounded-circle mx-2  " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    Helmi123@gmail.com
                                </td>
                                <td>
                                    Admin Kursus
                                </td>
                                <td>
                                    <div class="status-badge">
                                        <div class="status-icon-container">
                                          <div class="status-icon">
                                            <i class="ri-check-line"></i>
                                          </div>
                                        </div>
                                        <div class="status-text">aktif</div>
                                    </div>
                                </td>
                                <td>
                                    <!-- Tombol Edit dan Hapus (Remix Icon) -->
                                    <div class="d-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <button class="btn p-2 rounded-2" style="background-color: #e9ba00;">
                                            <i class="ri-pencil-line text-white"></i>
                                        </button>

                                        <!-- Tombol Hapus -->
                                        <button class="btn p-2 rounded-2" style="background-color: #ff1900;">
                                            <i class="ri-delete-bin-6-line text-white"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/managers/ADA-logo.png') }}" class="rounded-circle mx-2 "
                                            width="60" height="60" alt="Foto">
                                        <span>ADA Company</span>
                                    </div>
                                </td>
                                <td>
                                    Helmi123@gmail.com
                                </td>
                                <td>
                                    Admin Kursus
                                </td>
                                <td>
                                    <div class="status-badge">
                                        <div class="status-icon-container">
                                          <div class="status-icon">
                                            <i class="ri-check-line"></i>
                                          </div>
                                        </div>
                                        <div class="status-text">aktif</div>
                                    </div>
                                </td>

                                <td>
                                    <!-- Tombol Edit dan Hapus (Remix Icon) -->
                                    <div class="d-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <button class="btn p-2 rounded-2" style="background-color: #e9ba00;">
                                            <i class="ri-pencil-line text-white"></i>
                                        </button>

                                        <!-- Tombol Hapus -->
                                        <button class="btn p-2 rounded-2" style="background-color: #ff1900;">
                                            <i class="ri-delete-bin-6-line text-white"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/managers/Bapak-Bapak-Berjas.png') }}"
                                            class="rounded-circle mx-2 " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    Helmi123@gmail.com
                                </td>
                                <td>
                                    Admin Kursus
                                </td>
                                <td>
                                    <div class="status-badge">
                                        <div class="status-icon-container">
                                          <div class="status-icon">
                                            <i class="ri-check-line"></i>
                                          </div>
                                        </div>
                                        <div class="status-text">aktif</div>
                                    </div>
                                </td>
                                <td>
                                    <!-- Tombol Edit dan Hapus (Remix Icon) -->
                                    <div class="d-flex gap-2">
                                        <!-- Tombol Edit -->
                                        <button class="btn p-2 rounded-2" style="background-color: #e9ba00;">
                                            <i class="ri-pencil-line text-white"></i>
                                        </button>

                                        <!-- Tombol Hapus -->
                                        <button class="btn p-2 rounded-2" style="background-color: #ff1900;">
                                            <i class="ri-delete-bin-6-line text-white"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
