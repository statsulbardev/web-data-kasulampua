<div>
    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>{{ $pageTitle }}</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Indikator strategis yang dapat dientri adalah IPM, Kemiskinan, Kontribusi PDRB, dan Perkembangan Ekonomi.</p>

                <!-- Vertical Form -->
                <form class="row g-3" wire:submit="submit">
                    <div class="col-6">
                        <label for="tahun" class="form-label fw-bold">Tahun</label>
                        <input wire:model="tahun" type="text" class="form-control" id="tahun">
                    </div>
                    <div class="col-6">
                        <label for="indikator" class="form-label fw-bold">Jenis Indikator</label>
                        <select wire:model.live="indikator" id="indikator" class="form-select">
                            <option hidden selected>Pilih Jenis Indikator ...</option>
                            <option value="ipm">Indeks Pembangunan Manusia</option>
                            <option value="kemiskinan">Kemiskinan</option>
                            <option value="pdrb">Kontribusi PDRB</option>
                            <option value="ekonomi">Pertumbuhan Ekonomi</option>
                        </select>
                    </div>
                    <div class="col-12">

                        @if (isset($indikator) && ($indikator === 'ipm' || $indikator === 'kemiskinan'))
                            <label for="url" class="form-label fw-bold">Entri Data</label>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Wilayah</th>
                                        <th scope="col">Provinsi</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($this->provinces as $index => $province)
                                        <tr>
                                            <th scope="row">{{ $province->kode_wilayah }}</th>
                                            <td>{{ $province->nama_wilayah }}</td>
                                            <td>
                                                <input type="number" step="0.01" class="form-control" wire:model="data.{{ $index }}.{{ $province->kode_wilayah }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @elseif(isset($indikator))
                            <label for="url" class="form-label fw-bold">Entri Data</label>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Wilayah</th>
                                        <th scope="col">Pulau</th>
                                        <th scope="col">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($this->islands as $index => $island)
                                    <tr>
                                        <th scope="row">{{ $island->kode_wilayah }}</th>
                                        <td>{{ $island->nama_wilayah }}</td>
                                        <td>
                                            <input type="number" step="0.01" class="form-control"
                                                wire:model="data.{{ $index }}.{{ $island->kode_wilayah }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                    <div class="col-12">
                        <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                        <input wire:model="keterangan" type="text" class="form-control" id="keterangan">
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
