<div>
    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>Unggah Infografis Baru</h1>
        </div>

        <div class="card">
            <div class="mt-4 card-body">
                <p>Berkas infografis yang diizinkan adalah <code>.png dan .jpg</code></p>

                <!-- Vertical Form -->
                <form class="row g-3" wire:submit="submit">
                    <div class="col-12"
                        x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label for="file" class="form-label fw-bold">Gambar Infografis</label>
                        <input wire:model="infographic" type="file" class="form-control" id="file">
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
