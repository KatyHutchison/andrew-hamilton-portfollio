<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about () {

        $page = Page::where('label', 'about')->with(['images', 'texts'])->first();

        $pageData = collect([
            'headerImage' => $page->images->first(),
            'mainText' => $page->texts->first(),
        ]);

        return view('about.about-page', compact(['page', 'pageData']));
    }
}
