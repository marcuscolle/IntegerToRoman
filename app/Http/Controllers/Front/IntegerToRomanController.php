<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ConverterRequest;
use App\Services\Front\ConverterService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IntegerToRomanController extends Controller
{
    public function index(Request $request): view
    {
        return view('front.index', ['roman' => $request->get('roman') ?? null]);
    }

    public function convert(ConverterRequest $request): RedirectResponse
    {
        $converter = new ConverterService($request->validated('converter'));

        try {
            $result = $converter->convert();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('front.index', ['roman' => $result]);
    }
}
