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
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Article Page',
            'content' => 'Halaman ini adalah untuk menampilkan berita / artikel yang dirangkum.',
            'judul_artikel' => 'Membuat Web Menggunakan Code Igniter 4 - by. Febro',
            'isi_artikel' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias voluptatibus corporis voluptas repellat nulla labore, officiis atque soluta corrupti nobis consectetur fugit eius voluptates, exercitationem amet dolorem totam porro necessitatibus?'
        ]);
    }
}
