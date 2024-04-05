<?php

namespace App\Http\Controllers;

use App\Trait\InfographicTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InfographicController extends Controller
{
    use InfographicTrait;

    public function frontIndex()
    {
        return view('frontend.infographic.index', ['infographics' => $this->getInfographic()]);
    }

    public function backIndex()
    {
        return view('backend.infographic.index', ['infographics' => $this->getInfographic()]);
    }

    public function backCreate()
    {
        return view('backend.infographic.builder');
    }

    public function backStore(Request $request)
    {
        $request->validate(['file' => 'required|mimes:png,jpg']);

        if ($request->file()) {
            $fileName = $request->file->getClientOriginalName();

            $request->file('file')->storeAs("/infographic" . "/", $fileName, 'public');

            return redirect()->route('backend.infographic.index');
        }
    }

    public function backDestroy(Request $request)
    {
        $filePath = $request->post('filepath');

        File::delete($filePath);

        return redirect()->route('backend.infographic.index');
    }
}
