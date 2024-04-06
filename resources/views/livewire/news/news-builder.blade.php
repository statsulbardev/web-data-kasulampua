<div>
    <main id="main" class="main">
        <div class="pagetitle mb-3">
            <h1>{{ $pageTitle }}</h1>
        </div>
        <div class="card">
            <div class="mt-4 card-body">
                <p>Lengkapi informasi berita yang anda tulis sesuai dengan form yang disediakan di bawah ini.</p>

                <!-- Vertical Form -->
                <form class="row g-3" wire:submit="submit">
                    <div class="col-12">
                        <label for="title" class="form-label fw-bold">Judul Berita</label>
                        <input wire:model="form.title" type="text" class="form-control" id="title">
                    </div>
                    <div class="col-12"
                        x-data="{ uploading: false, progress: 0 }"
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label for="picture" class="form-label fw-bold">Link Cover Berita</label>
                        @if ($routeName == 'backend.news.edit')
                            <br>
                            <img src="{{ secure_asset('storage/app/public/' . $this->form->picture) }}" alt="" class="img-fluid mb-3 rounded" width="150">
                        @endif
                        <input wire:model="form.image" type="file" class="form-control" id="picture">
                        <div x-show="uploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                    <div wire:ignore class="col-12">
                        <label for="description" class="form-label fw-bold">Isi Berita</label>
                        <trix-editor class="form-textarea w-full" x-data x-on:trix-change="$dispatch('input', event.target.value)" x-ref="trix"
                            wire:model="form.description" wire:key="{{ Str::random() }}">
                        </trix-editor>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
