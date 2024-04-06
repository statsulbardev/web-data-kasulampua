<div>
    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>Unggah Tabel Statistik Baru</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Pilih kategori tabel kemudian unggah berkas dengan ekstensi excel <code>(.xslx)</code></p>

                <!-- Vertical Form -->
                <form class="row g-3" wire:submit="submit">
                    <div class="col-12">
                        <label for="kategori" class="form-label fw-bold">Kategori Tabel</label>
                        <select wire:model="kategori" class="form-control" id="kategori" name="kategori">
                            <option hidden selected>Pilih Salah Satu Kategori</option>
                            <option value="sosial">Sosial & Kependudukan</option>
                            <option value="ekonomi">Ekonomi & Perbankan</option>
                            <option value="pertanian">Pertanian & Industri</option>
                        </select>
                    </div>
                    <div class="col-12"
                        x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label for="description" class="form-label fw-bold">Berkas Excel Tabel Statistik</label>
                        <input wire:model="file" type="file" class="form-control" id="tabel">
                        <div x-show="uploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
