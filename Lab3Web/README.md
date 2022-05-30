# Lab3Web

Tugas Pemrograman Web - Pertemuan 4

<hr>

Nama : Andriansyah <br>
Nim : 312010011 <br>
Kelas : TI.20.B1

<hr>

## Praktikum

Langkah awal buatlah dokumen HTML dengan nama file " lab3_list.html " seperti berikut.

![Dokumen](img/Doc%20HTML.jpg)

**1. Membuat Ordered List**

Ordered list dibuat dengan tag < ol >. Lalu di dalamnya diisi dengan item-item yang akan dimasukkan ke dalam list. Item dibuat dengan tag < li > (list item). Contohnya seperti berikut.

![Dokumen](img/order%20list.jpg)

Lalu hasilnya akan seperti ini

![Dokumen](img/hasil%20order%20list.jpg)

**2. Membuat Unorderd List**

Kemudian tambakan kode untuk membuat Unordered List, setelah deklarasi ordered list pada
section unordered-list, seperti berikut.

![Dokumen](img/Unorder%20list.jpg)

Disini saya menambahkan atribut "type" pada tag < ul > dan memberikan nilai "square" untuk simbol persegi. Jika dilihat hasilnya akan seperti berikut.

![Dokumen](img/Hasil%20unorder%20list.jpg)

**3. Membuat Description List**

Kemudian tambahkan kode untuk membuat description list setelah deklarasi unorderd-list.

![Dokumen](img/Description%20list.jpg)

Description List digunakan untuk membuat daftar dimana tiap daftar tersebut memiliki penjelasan (sub-bagian).

Ada tiga tag yang digunakan untuk membuat description list, yaitu:

• < dl > (description list) tag untuk memulai description list;

• < dt > (description term) tag untuk membuat kata yang akan dideskripsikan;

• < dd > (description description) tag untuk membuat penjelasan dari kata.

Lalu hasilnya akan seperti berikut.

![Dokumen](img/Hasil%20Description%20list.jpg)

**4. Membuat Tabel**

Buat file baru dengan nama lab3_tabel.html seperti berikut.

![Dokumen](img/tabel.jpg)

Kemudian selanjutnya tambahkan kode untuk membuat tabel sederhana seperti berikut:

![Dokumen](img/lanjutan%20tabel.jpg)

Jika dilihat maka hasilnya akan seperti ini

![Dokumen](img/hasil%20tabel.jpg)

HTML Table dapat dibuat dengan tag sebagai berikut.

< table > Mendefinisikan sebuah tabel dalam dokumen HTML. Atribut: border, cellpadding, cellspacing

< thead > untuk membungkus bagian kepala tabel

< tbody > untuk membungkus bagian body dari tabel

< th > Membuat judul kolom

< tr > Mendefinisikan baris dalam tabel.

Atribut: align (left, center, right), valign (top, middle,
bottom)

< td > Mendefinisikan kolom tabel.

Atribut: align (left, center, right), valign (top, middle,
bottom), colspan, rowspan.

Tag yang paling penting untuk diingat adalah tag
< table >, < tr >, dan < td >. Sementara tag yang lain adalah tambahan (opsional), boleh digunakan boleh tidak.

**Mengatur Margin dan Padding**

Untuk mengatur margin dan padding pada cel data, tambahkan atribut cellpadding dan cellspacing pada tag table

< table border="1" cellpadding="4" cellspacing="0" >

**Menggabungkan Sel Data**

Untuk menggabungkan sel data, gunakan atribut rowspan dan colspan. Atribut rowspan untuk
menggabungkan baris (secara vertikal) dan colspan untuk menggabungkan kolom (secara horizontal).

![Dokumen](img/rowspan.jpg)

Refresh browser dan lihat hasilnya.

![Dokumen](img/hasil%20rowspan.jpg)

**5. Membuat Form**

Buat file baru dengan nama lab3_form.html seperti berikut.

![Dokumen](img/doc%20form.jpg)

Untuk membuat form digunakan tag < form > dengan atribut action dan method. Atribut action
untuk menentukan aksi yang akan digunakan pada saat form dikirim. Dan method adalah untuk
menentukan metode yang digunakan dalam mengirimkan data

Kemudian selanjutnya tambahkan kode untuk membuat tabel sederhana seperti berikut:

![Dokumen](img/form.jpg)

Jika dilihat maka hasilnya seperti berikut.

![Dokumen](img/hasil%20form.jpg)

**Menambahkan Style pada Form**

Agar tampilan form lebih menarik, bisa ditambahkan CSS seperti berikut

![Dokumen](img/style%20css.jpg)

Dan jika di refresh maka akan seperti berikut.

![Dokumen](img/hasil%20style%20css.jpg)

## Pertanyaan dan Tugas

Buatlah form yang menampilkan dropdown menu dan listbox dengan multiple selection.

Jawab :

Disini saya mencontohkan menu pilihan untuk Hobi .

Contoh codingan seperti berikut.

![Dokumen](img/Soal.jpg)

Maka hasilnya seperti berikut.

![Dokumen](img/hasil%20soal.jpg)

Untuk memilih pilihan lebih dari satu tekan ctrl lalu pilih pilihan yg lainnya sesuai hobi masing-masing.
