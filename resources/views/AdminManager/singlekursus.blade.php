@extends('layout.single')

@php
    $script = '<script src="' . asset('assets/js/desc.js') . '"></script>';
@endphp

@section('content')
    <div class="container-fluid me-7">
        <div
            class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 m-3 m-md-5 mb-4 mb-md-16">
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset('images/managers/Elon-Musk.png') }}" alt="image" class="img-fluid rounded-circle"
                    style="width: 40px; height: 40px; object-fit: cover;">
                <span class="fw-bold text-neutral-900">Elon Musk</span>
                <i class="ri-bar-chart-2-fill" style="font-size: 32px;"></i>
                <span class="fw-bold text-neutral-900">Intermediate</span>
            </div>

            <a href="{{ route('adminkursus') }}"
                class="btn btn-primary rounded-3 d-flex align-items-center justify-content-center"
                style="background-color: #002F87; width: 110px; height: 50px;">
                <i class="ri-arrow-left-line fs-5 me-2"></i>
                <span>Kembali</span>
            </a>
        </div>



        <div class="m-3 m-md-5">
            <h4 class="text-neutral-900 mb-3 mb-md-36">Smart Factory.</h4>

            <!-- Tombol -->
            <div class="btn-group radius-8 mb-20">
                <button type="button" class="btn btn-light px-20 py-11 radius-8 active-tab"
                    onclick="showTab('deskripsi', this)">Deskripsi</button>
                <button type="button" class="btn btn-light px-20 py-11"
                    onclick="showTab('pemateri', this)">Pemateri</button>
            </div>

            <!-- Konten Deskripsi -->
            <div id="konten-deskripsi" class="tab-content fade-in">
                <div class="px-4 py-4">
                    <div class="row">
                        <!-- Kolom Deskripsi -->
                        <div class="col-12 col-lg-8 order-2 order-lg-1 mb-4 mt-3">
                            <h5 class="fw-bold">Transformasi Digital di Pabrik</h5>
                            <p style="text-align: justify;">
                                “Kursus ini mengajarkan cara menerapkan teknologi canggih seperti otomasi industri, Internet
                                of
                                Things (IoT),
                                dan analisis data di pabrik. Peserta akan mempelajari bagaimana mengoptimalkan proses
                                produksi,
                                meningkatkan
                                keamanan kerja, serta menggunakan analitik prediktif untuk pemeliharaan preventif. Kursus
                                ini juga
                                mencakup
                                studi kasus dari perusahaan terkemuka dan proyek-proyek simulasi untuk keterampilan praktis.
                            </p>
                            <p style="text-align: justify;">
                                Selain itu, peserta akan mengeksplorasi tantangan dan peluang dalam transformasi digital di
                                industri
                                manufaktur, termasuk aspek keamanan siber dan manajemen perubahan. Setelah menyelesaikan
                                kursus,
                                peserta akan
                                siap memimpin perubahan di lingkungan pabrik, mampu menghadapi tantangan teknologi masa
                                depan, dan
                                mengidentifikasi peluang baru untuk inovasi dan peningkatan efisiensi.”
                            </p>
                            <div class="mb-36">
                                <h6 class="fw-bold">Yang Akan Kamu Pelajari</h6>
                                <ul class="text-start" style="list-style: disc; padding-left: 1rem;">
                                    <li>Optimasi Proses Produksi</li>
                                    <li>Keamanan Kerja yang Ditingkatkan</li>
                                    <li>Analitik Prediktif</li>
                                    <li>Inovasi Berkelanjutan</li>
                                </ul>
                            </div>
                            <h6>Yang Akan Kamu Pelajari</h6>
                            <div class="me-3">
                                <p class="d-flex text-wrap" style="text-align: justify;">
                                    Melalui kursus ini, Anda akan mendapatkan keterampilan praktis dan pengetahuan teoritis
                                    yang
                                    dibutuhkan untuk memimpin transformasi digital di industri manufaktur.
                                    Dapatkan wawasan dari studi kasus nyata dan proyek-proyek simulasi yang dirancang untuk
                                    memberikan
                                    pengalaman langsung.
                                </p>
                            </div>
                        </div>

                        <!-- Kolom Card -->
                        <div class="col-12 col-lg-4 order-1 order-lg-2">
                            <div class="card shadow-sm border-0">
                                <img src="{{ asset('images/managers/Foto-aja.png') }}" class="card-img-top p-3 img-fluid"
                                    alt="Kursus Image">
                                <div class="card-body">
                                    <h6 class="text-danger fw-bold">Rp10.000
                                        <span class="badge bg-danger text-danger-200 float-end">18% off</span>
                                    </h6>
                                    <p><span class="text-muted text-decoration-line-through">Rp12.195</span></p>
                                    <div class="mt-3">
                                        <p><i class="ri-bar-chart-2-fill"></i> <strong>Level</strong> <span
                                                class="float-end">Mahir</span></p>
                                        <p><i class="ri-user-fill"></i> <strong>Siswa</strong> <span
                                                class="float-end">404</span>
                                        </p>
                                        <p><i class="ri-calendar-fill"></i> <strong>Jadwal</strong> <span
                                                class="float-end">28
                                                Januari 2008</span></p>
                                        <p><i class="ri-time-fill"></i> <strong>Durasi</strong> <span class="float-end">2
                                                jam 90
                                                menit</span></p>
                                    </div>
                                    <a href="#" class="btn btn-primary w-100"
                                        style="background-color: #002F87;">Daftar
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <h6 class="mt-5">Kelola Anggota Kursus</h6>
                <p class="text-capitalize mb-5">Setelah peserta mengikuti kursus, admin perlu menghubungi pelatih untuk mendapatkan informasi kelulusan setiap peserta.Gunakan tombol WhatsApp yang tersedia untuk mengirim pesan langsung ke pelatih dan meminta konfirmasi hasil kursus.Berdasarkan informasi dari pelatih, admin dapat menentukan apakah peserta dinyatakan lolos atau tidak lolos.Pastikan informasi yang diterima sudah valid sebelum melakukan verifikasi.Klik ikon centang hijau untuk peserta yang dinyatakan lolos, atau ikon silang merah untuk peserta yang tidak lolos.Data hasil verifikasi ini akan digunakan sebagai acuan untuk proses selanjutnya, seperti penerbitan sertifikat atau penyampaian hasil akhir.</p>

                <div class="d-flex justify-content-between align-items-center flex-wrap my-3">

                    <!-- Kiri: Filter + Status -->
                    <div class="d-flex align-items-center gap-2">
                        <!-- Filter Button -->
                        <button class="btn btn-light border shadow-sm d-flex align-items-center gap-2">
                            <iconify-icon icon="tabler:filter"></iconify-icon>
                            Filter
                        </button>

                        <div class="dropdown">
                            <button class="btn btn-outline-secondary d-flex align-items-center dropdown-toggle shadow-sm"
                                type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="spinner-border spinner-border-sm text-secondary me-2" role="status"
                                    aria-hidden="true"></span>
                                Menunggu
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                <li><a class="dropdown-item" href="#">Disetujui</a></li>
                                <li><a class="dropdown-item" href="#">Ditolak</a></li>
                                <li><a class="dropdown-item" href="#">Menunggu</a></li>
                            </ul>
                        </div>

                    </div>

                    <!-- Kanan: Search Box -->
                    <div class="input-group shadow-sm" style="max-width: 250px;">
                        <span class="input-group-text bg-white border-end-0">
                            <iconify-icon icon="tabler:search"></iconify-icon>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Pencarian">
                    </div>
                </div>
                <div class="card-body">
                    <div class="mx-3">
                        <div class="table-responsive">
                            <table class="table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="d-flex align-items-center text-center">
                                                <label class="-label" for="checkAll">
                                                    No
                                                </label>
                                            </div>
                                        </th>
                                        <th scope="col-1">Nama Anggota</th>
                                        <th scope="col-2">Tanggal Daftar</th>
                                        <th scope="col-5">Nomor Whatsapp</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check1">
                                                    01
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            23 Jan 2025
                                        </td>
                                        <td>08976535</td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check2">
                                                    02
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            23 Jan 2025
                                        </td>
                                        <td>
                                            08977533
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check3">
                                                    03
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check4">
                                                    04
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check5">
                                                    05
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            089775543
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <label class="-label" for="check6">
                                                    06
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check7">
                                                <label class="-label" for="check7">
                                                    07
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check8">
                                                <label class="-label" for="check8">
                                                    08
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08977533
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check9">
                                                <label class="-label" for="check9">
                                                    09
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08776424
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check110">
                                                <label class="-label" for="check110">
                                                    10
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success rounded-3 p-2 me-2" style="background-color: #027400;">
                                                <i class="ri-check-line text-white" ></i>
                                              </button>
                                              
                                              <!-- Tombol Merah -->
                                              <button class="btn btn-danger rounded-3 p-2" style="background-color: red">
                                                <i class="ri-close-line text-white"></i>
                                              </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between mt-5">
                            <span>Showing 1 to 10 of 12 entries</span>
                            <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                        href="javascript:void(0)">
                                        <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                        href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                        href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                        href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                        href="javascript:void(0)">
                                        <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Konten Pemateri -->
            <div id="konten-pemateri" class="tab-content fade-in" style="display: none;">
                <div class="px-4 py-4">
                    <div class="row">
                        <!-- Kolom Deskripsi -->
                        <div class="col-12 col-lg-8 order-2 order-lg-1 mb-4 mt-3">
                            <h5 class="fw-bold">Transformasi Digital di Pabrik</h5>
                            <p style="text-align: justify;">
                                “Kursus ini mengajarkan cara menerapkan teknologi canggih seperti otomasi industri, Internet
                                of
                                Things (IoT),
                                dan analisis data di pabrik. Peserta akan mempelajari bagaimana mengoptimalkan proses
                                produksi,
                                meningkatkan
                                keamanan kerja, serta menggunakan analitik prediktif untuk pemeliharaan preventif. Kursus
                                ini juga
                                mencakup
                                studi kasus dari perusahaan terkemuka dan proyek-proyek simulasi untuk keterampilan praktis.
                            </p>
                            <p style="text-align: justify;">
                                Selain itu, peserta akan mengeksplorasi tantangan dan peluang dalam transformasi digital di
                                industri
                                manufaktur, termasuk aspek keamanan siber dan manajemen perubahan. Setelah menyelesaikan
                                kursus,
                                peserta akan
                                siap memimpin perubahan di lingkungan pabrik, mampu menghadapi tantangan teknologi masa
                                depan, dan
                                mengidentifikasi peluang baru untuk inovasi dan peningkatan efisiensi.”
                            </p>
                            <div class="mb-36">
                                <h6 class="fw-bold">Yang Akan Kamu Pelajari</h6>
                                <ul class="text-start" style="list-style: disc; padding-left: 1rem;">
                                    <li>Optimasi Proses Produksi</li>
                                    <li>Keamanan Kerja yang Ditingkatkan</li>
                                    <li>Analitik Prediktif</li>
                                    <li>Inovasi Berkelanjutan</li>
                                </ul>
                            </div>
                            <h6>Yang Akan Kamu Pelajari</h6>
                            <div class="me-3">
                                <p class="d-flex text-wrap" style="text-align: justify;">
                                    Melalui kursus ini, Anda akan mendapatkan keterampilan praktis dan pengetahuan teoritis
                                    yang
                                    dibutuhkan untuk memimpin transformasi digital di industri manufaktur.
                                    Dapatkan wawasan dari studi kasus nyata dan proyek-proyek simulasi yang dirancang untuk
                                    memberikan
                                    pengalaman langsung.
                                </p>
                            </div>
                        </div>

                        <!-- Kolom Card -->
                        <div class="col-12 col-lg-4 order-1 order-lg-2">
                            <div class="card shadow-sm border-0">
                                <img src="{{ asset('images/managers/Foto-aja.png') }}" class="card-img-top p-3 img-fluid"
                                    alt="Kursus Image">
                                <div class="card-body">
                                    <h6 class="text-danger fw-bold">Rp10.000
                                        <span class="badge bg-danger text-danger-200 float-end">18% off</span>
                                    </h6>
                                    <p><span class="text-muted text-decoration-line-through">Rp12.195</span></p>
                                    <div class="mt-3">
                                        <p><i class="ri-bar-chart-2-fill"></i> <strong>Level</strong> <span
                                                class="float-end">Mahir</span></p>
                                        <p><i class="ri-user-fill"></i> <strong>Siswa</strong> <span
                                                class="float-end">404</span>
                                        </p>
                                        <p><i class="ri-calendar-fill"></i> <strong>Jadwal</strong> <span
                                                class="float-end">28
                                                Januari 2008</span></p>
                                        <p><i class="ri-time-fill"></i> <strong>Durasi</strong> <span class="float-end">2
                                                jam 90
                                                menit</span></p>
                                    </div>
                                    <a href="#" class="btn btn-primary w-100"
                                        style="background-color: #002F87;">Daftar
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <h6 class="mt-5">Kelola Anggota Kursus</h6>
                <p class="text-secondary">
                    Klik tombol <span class="fw-semibold">Centang</span>(Hijau) jika sudah mengikuti semua materi kursus,
                    dan sesuai
                </p>

                <div class="card mb-20 mx-3 p-3">
                    <div class="row">
                        <div class="col">
                            <div class="d-flex align-items-center gap-2 ms-5">
                                <select class="form-select form-select-sm" style="width: auto;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <div class="input-group" style="width: 200px;">
                                    <span class="input-group-text">
                                        🔍
                                    </span>
                                    <input type="text" class="form-control" placeholder="Cari">
                                </div>
                                <select class="form-select form-select-sm" style="width: 100px;">
                                    <option value="Status">Status</option>
                                    <option value="Tidak Lolos">Tidak Lolos</option>
                                    <option value="Lolos tahap selanjutnya">Lolos tahap selanjutnya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mx-3">
                        <div class="table-responsive">
                            <table class="table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="checkAll">
                                                <label class="-label" for="checkAll">
                                                    S.L
                                                </label>
                                            </div>
                                        </th>
                                        <th scope="col-1">Nama Anggota</th>
                                        <th scope="col-2">Tanggal Pembuatan</th>
                                        <th scope="col-5">Deskripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Verifikasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check1">
                                                <label class="-label" for="check1">
                                                    01
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            23 Jan 2025
                                        </td>
                                        <td>08976535</td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>

                                        <td>
                                            <div class="">
                                                <input class="-input verif-check" type="checkbox"
                                                    id="verif1">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check2">
                                                <label class="-label" for="check2">
                                                    02
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            23 Jan 2025
                                        </td>
                                        <td>
                                            08977533
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check3">
                                                <label class="-label" for="check3">
                                                    03
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check4">
                                                <label class="-label" for="check4">
                                                    04
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="  d-flex align-items-center">
                                                <input class="-input" type="checkbox" value=""
                                                    id="check5">
                                                <label class="-label" for="check5">
                                                    05
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            089775543
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check6">
                                                    06
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check7">
                                                    07
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check8">
                                                    08
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08977533
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check9">
                                                    09
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <label class="-label" for="check110">
                                                    10
                                                </label>
                                            </div>
                                        </td>
                                        <td>Esa Azmi Faiq</td>
                                        <td>
                                            25 Jan 2025
                                        </td>
                                        <td>
                                            08976535
                                        </td>
                                        <td>
                                            <button class="btn btn-secondary"
                                                style="background-color: #f39c2b; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                                Menunggu
                                            </button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between mt-5">
                            <span>Showing 1 to 10 of 12 entries</span>
                            <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                        href="javascript:void(0)">
                                        <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                        href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                        href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                        href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                        href="javascript:void(0)">
                                        <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
