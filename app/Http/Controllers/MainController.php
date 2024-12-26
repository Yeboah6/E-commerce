<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function scrape() {
        echo 'test';
    }

    public function index() {
        return view('pages.index');
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

    public function productDetail() {
        return view('pages.product-detail');
    }

    public function women() {
        return view('pages.women');
    }
}
