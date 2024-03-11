<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ConverterRequest;
use App\Services\Front\IntegerToRomanService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IntegerToRomanController extends Controller
{
    public function index(Request $request): view
    {
        return view('front.index', ['roman' => $request->get('roman') ?? null]);
    }

    public function convert(ConverterRequest $request): view|RedirectResponse
    {
        $integer = new IntegerToRomanService($request->get('integer'));

        try{
            $roman = $integer->convert();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }


        //create redirect to index with the roman number
        return redirect()->route('front.index', ['roman' => $roman]);


    }
}
