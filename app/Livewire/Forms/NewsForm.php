<?php

namespace App\Livewire\Forms;

use App\Models\News;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NewsForm extends Form
{
    #[Validate('required', onUpdate: false, message: 'Judul berita harus terisi')]
    #[Validate('min:5', onUpdate: false, message: 'Judul berita minimal 5 karakter')]
    public string $title;

    #[Validate('nullable')]
    // #[Validate('mimes:png,jpg', onUpdate: false, message: 'Format gambar yang diizinkan adalah jpg dan png')]
    public $image;

    public ?string $picture;

    #[Validate('required', onUpdate: false, message: 'Isi berita harus terisi')]
    public string $description;

    public function save(): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            if (!is_null($this->image)) {
                $fileName = $this->image->getClientOriginalName();

                $filePath = $this->image->storeAs("/news", $fileName, 'public');
            }

            News::create([
                'title'       => $this->title,
                'picture'     => $filePath ?? null,
                'description' => $this->description
            ]);

            DB::commit();

            $message = "Berita telah disimpan";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Berita gagal disimpan";
        }

        return $message;
    }

    public function update(News $news): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            if (!is_null($this->image)) {
                File::delete(storage_path('app/public/' . $news->picture));

                $fileName = $this->image->getClientOriginalName();

                $filePath = $this->image->storeAs("/news", $fileName, 'public');
            }

            $news->update([
                'title'       => $this->title,
                'picture'     => $filePath ?? $news->picture,
                'description' => $this->description
            ]);

            DB::commit();

            $message = "Berita telah diperbaharui";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Berita gagal diperbaharui";
        }

        return $message;
    }

    public function destroy(News $news): string
    {
        try {
            DB::beginTransaction();

            File::delete(storage_path('app/public/' . $news->picture));

            $news->delete();

            DB::commit();

            $message = "Berita telah dihapus";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Berita gagal dihapus";
        }

        return $message;
    }
}
