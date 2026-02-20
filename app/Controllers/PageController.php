<?php

namespace App\Controllers;

use App\Core\Controller;

class PageController extends Controller {
    public function index() {
        $this->render('home', [
            'title' => 'Fruitline Trading — Premium Tanzanian Produce'
        ]);
    }

    public function about() {
        $this->render('about', [
            'title' => 'About Us — Fruitline Trading'
        ]);
    }

    public function products() {
        $this->render('products', [
            'title' => 'Our Products — Fruitline Trading'
        ]);
    }

    public function gallery() {
        $this->render('gallery', [
            'title' => 'Gallery — Fruitline Trading'
        ]);
    }

    public function markets() {
        $this->render('markets', [
            'title' => 'Export Markets — Fruitline Trading'
        ]);
    }

    public function process() {
        $this->render('process', [
            'title' => 'Our Process — Fruitline Trading'
        ]);
    }

    public function contact() {
        $this->render('contact', [
            'title' => 'Contact Us — Fruitline Trading'
        ]);
    }
}
