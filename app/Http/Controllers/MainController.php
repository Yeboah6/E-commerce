<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    public function scrape() {
        $contents = File::get(base_path('public/dataset_asos-com-scraper.json'));
        $json = json_decode(json:$contents, associative: true);
        print_r($json);
    }

    public function index() {
        $contents = File::get(base_path('public/dataset_asos-com-scraper.json'));
        $json = json_decode(json:$contents, associative: true);
        return view('pages.index', compact('json'));
    }

    public function about() {
        return view('pages.about');
    }

    public function wishlist() {
        return view('pages.add-to-wishlist');
    }

    public function cart() {
        return view('pages.cart');
    }

    public function checkout() {
        return view('pages.checkout');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function men() {
        return view('pages.men');
    }

    public function orderComplete() {
        return view('pages.order-complete');
    }

    public function productDetail($id) {
        $contents = File::get(base_path('public/dataset_asos-com-scraper.json'));
        $json = json_decode(json:$contents, associative: true);

        foreach($json as $file) {
            if ($file['id'] == $id) {
                return view('pages.product-detail', compact('file'));
            }
        }
        
    }

    public function women() {
        return view('pages.women');
    }
}
