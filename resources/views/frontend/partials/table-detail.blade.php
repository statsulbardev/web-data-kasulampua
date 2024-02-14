<x-guest-layout>
    <section id="blank" class="tabel"></section>

    <!-- ======= Statistik Section ======= -->
    <section id="statistik" class="tabel">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <div style="width:100%; display:flex; justify-content: flex-end;">
                        {{-- <a href=<?php echo "'" .sprintf("./data/%s/%s", $category, $filename)."'"?>
                            class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Download Excel</a> --}}
                    </div>
                    <div>
                        {{ parseExcelToHTML($category, $filename) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
