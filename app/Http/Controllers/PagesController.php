<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view ('user.index');
    }

    public function about() {
        return view('user.company.about');
    }

    public function contact() {
        return view('user.company.contactUs');
    }

    public function srapp() {
        return view('user.product.srapp');
    }

    public function csrcomm() {
        return view('user.services.csrCommunication');
    }

    public function csrschool() {
        return view('user.services.csrSchool');
    }

    public function csrminiclass() {
        return view('user.services.csr_mini_class.miniClass');
    }

    public function csrrnd() {
        return view('user.services.csrRnD');
    }

    public function csrinno() {
        return view('user.services.csrInnovation');
    }

    public function csracademy() {
        return view('user.initiatives.csrAcademy');
    }

    public function event() {
        return view('user.event.event');
    }

    public function devent() {
        return view('user.event.detailEvent');
    }

    public function portofolio() {
        return view('user.home.portofolio');
    }
}
