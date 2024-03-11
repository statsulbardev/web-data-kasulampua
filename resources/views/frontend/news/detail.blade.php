<x-guest-layout>
    <section id="blank" class="d-flex align-items-center"></section>

    <!-- Berita Section -->
    <section id="berita" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row gx-5" style="display:flex; justify-content:center;">

                <div class="col-lg-12 col-md-12 mb-12 mb-lg-12" style="max-width:75%;">
                    <!-- News block -->
                    <div>
                        <!-- Featured image -->
                        <h5 style="color:black;">{{ $news->title }}</h5>
                        <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                            <img src="{{ secure_asset('assets/img/news/' . $news->picture) }}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>

                        <!-- Article data -->
                        <div class="row mb-3">
                            <div class="col-6">
                                <a href="" style="color:rgb(158, 158, 158)">
                                    <i class="fas fa-calendar"></i>
                                    {{ $news->updated_at->format('d M Y') }}
                                </a>
                            </div>
                        </div>

                        <!-- Article title and description -->
                        <a href="" style="color: #cda45e">
                            <!-- <h5>Di Tanah Papua, Konreg PDRB Sulampua Digelar</h5> -->

                            <p class="text-dark">
                                Pada Hari, Selasa 7 Februari 2023. Bappeda Prov. Sultra menyelenggarakan Rapat Rancangan
                                Rencana Pembangunan Daerah Prov. Sultra Tahun 2024-2026 (Finalisasi Tujuan, Sasaran,
                                Strategi dan Arah Kebijakan Pembangunan Daerah Serta Program Perangkat Daerah) yang
                                dilaksanakan di Hotel Azizah Syariah Kendari.
                            </p>
                            <p class="text-dark">
                                Kegiatan ini bertujuan untuk mendiskusikan Tujuan, Sasaran, Strategi dan Arah Kebijakan
                                Pembangunan Daerah Serta Program Perangkat Daerah dengan seluruh OPD Lingkup Pemprov.
                                Sultra.
                            </p>
                            <p class="text-dark">
                                Kegiatan ini dihadiri oleh Kepala Bappeda Prov. Sultra (J. Robert), dan Seluruh Perencana
                                OPD Lingkup Pemprov. Sultra.
                            </p>
                            <p class="text-dark">
                                Kegiatan diawali dengan penyampaian arahan oleh Kepala Bappeda Prov. Sultra (J. Robert),
                                dalam arahannya beliau menyampaikan Kegiatan ini merupakan rangkaian penyusunan dokumen RPD
                                tahun 2024-2026, Akhir februari diharapkan sudah dilakukan penetapan RPD sehingga penyusunan
                                dokumen perencanaan seperti RKPD dan renja OPD bisa dilaksanakan, Isu strategis yang perlu
                                diperhatikan yaitu adanya perang rusia dan ukraina sehingga berpengaruh pada perekonomian
                                nasional sehingga di perkirakan adanya resesi di tahun 2023.
                            </p>
                            <p class="text-dark">
                                Kemudian dilanjutkan diskusi dengan OPD Lingkup Pemprov. Sultra yang dipimpin oleh Kepala
                                Bidang Perencanaan Makro Bappeda Prov. Sultra (Hasrullah), dalam sesi diskusi tersebut,
                                dibahas mengenai Tujuan, Sasaran, Strategi dan Arah Kebijakan Pembangunan Daerah yang akan
                                dimasukkan dalam Dokumen Rencana Pembangunan Daerah Tahun 2024 - 2026.
                            </p>
                        </a>
                        <!-- News block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
