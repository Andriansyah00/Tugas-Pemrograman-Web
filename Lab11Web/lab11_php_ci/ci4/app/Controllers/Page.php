<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About', 'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Contact Us Page',
            'content' => 'Ini adalah Halaman <b>Contact Us</b>. Anda dapat mengirimkan pesan pada halaman ini'
        ]);
        echo "Ini halaman Contact";
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
