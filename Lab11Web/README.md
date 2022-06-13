# Lab11Web

Tugas Pemrograman Web - Pertemuan 11

Praktikum 9

<hr>

Nama : Andriansyah <br>
Nim : 312010011 <br>
Kelas : TI.20.B1

<hr>

**Persiapan**

Persiapkan text editor misalnya VSCode.

Buat folder baru dengan nama lab11_php_ci pada docroot webserver (htdocs)

![Gambar](img/img2.jpg)

Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan:

• php-json ekstension untuk bekerja dengan JSON;

• php-mysqlnd native driver untuk MySQL;

• php-xml ekstension untuk bekerja dengan XML;

• php-intl ekstensi untuk membuat aplikasi multibahasa;

• libcurl (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstentsi tersebut, masuk ke XAMPP Control Panel, pada bagian
Apache klik Config -> PHP.ini

![Gambar](img/img1.jpg)

Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![Gambar](img/img3.jpg)

**1. Instalasi Codeigniter 4**

Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.

• Unduh Codeigniter dari website https://codeigniter.com/download

• Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.

• Ubah nama direktory framework-4.x.xx menjadi ci4.

• Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

**2. Menjalankan CLI (Command Line Interface)**

Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk
mengakses CLI buka terminal/command prompt.

Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat
(xampp/htdocs/lab11_php_ci/ci4/)
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: php spark

![Gambar](img/img5.jpg)

**3. Mengaktifkan Mode Debugging**

Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk
mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.

Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan
pesan kesalahan seperti berikut.

![Gambar](img/img6.jpg)

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable **CI_ENVIRONMENT** menjadi **development** .

Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable
CI_ENVIRINMENT menjadi development.

![Gambar](img/img7.jpg)

Sebagai contoh, saya akan menghilangkan salah satu syntax di dalam programnya dan akan menampilkan pesan error pada browser.

![Gambar](img/img8.jpg)

Dan yang terakhir, ubah kode pada file app/Controller/Home.php kemudian hilangkan titik koma (;) pada akhir kode seperti berikut.

**4. Membuat Route Baru .**

Tambahkan kode berikut di dalam Routes.php

```
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```

![Gambar](img/img10.jpg)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan
perintah berikut.

php spark routes

![Gambar](img/img11.jpg)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url
http://localhost/lab11_php_ci/ci4/public/about

Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page
tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih
dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

**Membuat Controller**

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php
pada direktori Controller kemudian isi kodenya seperti berikut.

```
<?php
namespace App\Controllers;
class Page extends BaseController
{
 public function about()
 {
 echo "Ini halaman About";
 }
 public function contact()
 {
 echo "Ini halaman Contact";
 }
 public function faqs()
 {
 echo "Ini halaman FAQ";
 }
}
```

Maka tampilan halamanya akan seperti berikut.

![Gambar](img/img12.jpg)

**Auto Routing**

Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status
autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true
menjadi false.

```
$routes->setAutoRoute(true);
```

Tambahkan method baru pada Controller Page seperti berikut.

```
public function tos()
{
 echo "ini halaman Term of Services";
}

```

![Gambar](img/img14.jpg)

Method ini belum ada pada routing, sehingga saya mengaksesnya dengan menggunakan
alamat: http://localhost/lab11_php_ci/ci4/public/page/tos

**Membuat View**

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi
kodenya seperti berikut.

```
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title><?= $title; ?></title>
</head>
<body>
 <h1><?= $title; ?></h1>
 <hr>
 <p><?= $content; ?></p>
</body>
</html>
```

Ubah method about pada class Controller Page menjadi seperti berikut:

```
public function about()
{
 return view('about', ['title' => 'Halaman About','content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.']);
}
```

Kemudian lakukan refresh pada halaman tersebut.

![Gambar](img/img16.jpg)

**Membuat Layout Web dengan CSS**

Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada
codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset
css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![Gambar](img/img17.jpg)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan
footer.php

![Gambar](img/img18.jpg)

File app/view/template/header.php

![Gambar](img/img19.jpg)

![Gambar](img/img20.jpg)

Kemudian ubah file app/view/about.php seperti berikut.

```
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```

Maka hasilnya akan seperti berikut.

![Gambar](img/img21.jpg)

**Pertanyaan dan Tugas**

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga
semua link pada navigasi header dapat menampilkan tampilan dengan layout yang
sama.

Jawab :

Menu Kontak

![Gambar](img/img22.jpg)

Menu Artikel

![Gambar](img/img23.jpg)

# Praktikum 12: Framework Lanjutan (CRUD)

**Persiapan.**

Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah
database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan
melalui XAMPP.

**Membuat Database : Studi Kasus Data Artikel**

CREATE DATABASE lab_ci4;

Lalu buatlah tabel seperti berikut.

![Gambar](img/img24.jpg)

**Konfigurasi koneksi database**

Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server.
Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php
atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env. Lakukan seperti gambar berikut hapus tanda # nya.

![Gambar](img/img25.jpg)

**Membuat Model**

Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada
direktori app/Models dengan nama ArtikelModel.php

![Gambar](img/img26.jpg)

**Membuat Controller**

Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![Gambar](img/img27.jpg)

**Membuat View**

Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file
baru dengan nama index.php.

![Gambar](img/img28.jpg)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost/lab11_php_ci/ci4/public/artikel

![Gambar](img/img29.jpg)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada
database agar dapat ditampilkan datanya.

![Gambar](img/img30.jpg)

Refresh browser, maka hasilnya akan seperti berikut.

![Gambar](img/img31.jpg)

**Membuat Tampilan Detail Artikel**

Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda.
Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![Gambar](img/img32.jpg)

**Membuat View Detail**

Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php

![Gambar](img/img33.jpg)

**Membuat Routing untuk artikel detail**

Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel
detail.

![Gambar](img/img34.jpg)

**Membuat Menu Admin**

Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada
Controller Artikel dengan nama admin_index().

![Gambar](img/img35.jpg)

Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

```
<?= $this->include('template/admin_header'); ?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel) : foreach ($artikel as $row) : ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <b><?= $row['judul']; ?></b>
                        <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                    </td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach;
        else : ?>
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>AKsi</th>
        </tr>
    </tfoot>
</table>

<?= $this->include('template/admin_footer'); ?>
```

Tambahkan routing untuk menu admin seperti berikut.

![Gambar](img/img36.jpg)

Setelah itu saya buat template header dan footer baru untuk Halaman Admin di direktori app/view/template.

![Gambar](img/img37.jpg)

![Gambar](img/img38.jpg)

Lalu saya tambahkan file css pada direktori ci4/public untuk mempercantik tampilan Halaman Admin. Dan hasilnya seperti berikut.

![Gambar](img/img39.jpg)

**Menambah Data Artikel**

Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![Gambar](img/img40.jpg)

Kemudian buat view untuk form tambah dengan nama form_add.php

![Gambar](img/img41.jpg)

![Gambar](img/img42.jpg)

Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![Gambar](img/img43.jpg)

Kemudian buat view untuk form tambah dengan nama form_edit.php

![Gambar](img/img44.jpg)

![Gambar](img/img45.jpg)

**Menghapus Data**

Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![Gambar](img/img46.jpg)
