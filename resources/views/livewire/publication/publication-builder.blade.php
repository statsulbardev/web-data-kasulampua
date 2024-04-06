<div>
    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>{{ $pageTitle }}</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Lengkapi informasi publikasi sesuai kebutuhan form di bawah ini.</p>

                <!-- Vertical Form -->
                <form class="row g-3" wire:submit="submit">
                    <div class="col-12">
                        <label for="title" class="form-label fw-bold">Judul Publikasi</label>
                        <input wire:model="form.title" type="text" class="form-control" id="title">
                    </div>
                    <div class="col-12"
                        x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label for="image" class="form-label fw-bold">Cover Publikasi</label>
                        @if ($routeName === 'backend.publication.edit')
                            <br>
                            <img src="{{ secure_asset('storage/app/public/' . $this->form->picture) }}" alt=""
                                class="img-fluid mb-3 rounded" width="150">
                        @endif
                        <input wire:model="form.image" type="file" class="form-control" id="image">
                        <div x-show="uploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="url" class="form-label fw-bold">Tautan Unduh Publikasi</label>
                        <input wire:model="form.url" type="text" class="form-control" id="url">
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
