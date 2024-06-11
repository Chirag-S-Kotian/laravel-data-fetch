<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Http;

class TimesOfIndiaController extends Controller
{
    public function index()
    {
        return view('timesofindia');
    }

    public function getData(Request $request)
    {
        $response = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
        if ($response->successful()) {
            $data = $response->json();

            // Ensure data is in expected format
            if (!isset($data['channel']['item'])) {
                return response()->json(['error' => 'Invalid data format'], 400);
            }

            // Prepare articles data
            $articles = $data['channel']['item'];

            // Process DataTables request
            return DataTables::of($articles)
                ->editColumn('title', function ($article) {
                    return '<a href="' . $article['link'] . '" target="_blank">' . $article['title'] . '</a>';
                })
                ->rawColumns(['title'])
                ->toJson();
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}

