<?php

namespace App\Livewire\Forms;

use App\Models\Publication;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PublicationForm extends Form
{
    #[Validate('required', onUpdate: false, message: 'Judul publikasi harus terisi')]
    #[Validate('min:5', onUpdate: false, message: 'Judul publikasi minimal lima karakter')]
    public string $title;

    // #[Validate('required', onUpdate: false, message: 'Cover publikasi harus terisi')]
    // #[Validate('mimes:jpg,png', onUpdate: false, message: 'Jenis file yang diizinkan adalah jpg dan png')]
    public $image;

    public ?string $picture;

    #[Validate('required', onUpdate: false, message: 'Url publikasi harus disematkan')]
    public string $url;

    public function save(): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $fileName = $this->image->getClientOriginalName();

            $filePath = $this->image->storeAs("/publication", $fileName, 'public');

            Publication::create([
                'title'   => $this->title,
                'picture' => $filePath,
                'url'     => $this->url
            ]);

            DB::commit();

            $message = "Publikasi telah disimpan";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Publikasi gagal disimpan";
        }

        return $message;
    }

    public function update(Publication $publication): string
    {
        $this->validate();

        try {
            DB::beginTransaction();

            if (!is_null($this->image)) {
                File::delete(storage_path('app/public/' . $publication->picture));

                $fileName = $this->image->getClientOriginalName();

                $filePath = $this->image->storeAs("/publication", $fileName, 'public');
            }

            $publication->update([
                'title'   => $this->title,
                'picture' => $filePath ?? $this->picture,
                'url'     => $this->url
            ]);

            DB::commit();

            $message = "Publikasi telah diperbaharui";
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = "Publikasi gagal diperbaharui";
        }

        return $message;
    }

    public function destroy(Publication $publication): string
    {
        try {
            DB::beginTransaction();

            File::delete(storage_path('app/public/' . $publication->picture));

            $publication->delete();

            DB::commit();

            $message = 'Publikasi telah dihapus';
        } catch(Exception $error) {
            DB::rollBack();

            Log::error($error->getMessage());

            $message = 'Publikasi gagal dihapus';
        }

        return $message;
    }
}
