<?php

namespace App\Http\Controllers;


use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;

class LinkController
{
    public function index() {
        $links = Link::all();

        $links = $links->map(function ($link) {
            $link->shortened_url = config('app.url') . '/' . $link->shortened_url;
            return $link;
        });

        return response()->json($links);
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'original_url' => 'required|url',
        ]);

        $link = Link::where('original_url', $validated['original_url'])->first();

        if ($link) {
            $link->touch();
        }
        else {
            Link::create([
                'original_url' => $validated['original_url'],
                'shortened_url' => substr(md5(uniqid()), 0, 6),
            ]);
        }

        return response()->json("/links?created=true");
    }

    public function redirect($shortened_url) {

        $link = Link::where('shortened_url', $shortened_url)->first();

        if (!$link) return Redirect::to("/notfound");

        return Redirect::to($link->original_url);
    }
}
