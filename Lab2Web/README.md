# Lab2Web

Tugas Pemrograman Web - Pertemuan 3

<hr>

Nama : Andriansyah <br>
Nim : 312010011 <br>
Kelas : TI.20.B1

<hr>

## Praktikum

1.**Membuat Dokumen HTML dan Membuat css internal**

Buatlah sebuah doc html lalu seperti contoh berikut.

![Membuat Doc html](img/Doc%20Html.jpg)

setelah itu buka browser untuk melihat hasilnya.

![Hasilnya](img/Hasil%20Doc%20HTML.jpg)

2.**Mendeklarasikan CSS Internal**

Untuk mendeklarasikan CSS Internal , tambahkan ke dalam bagian head dokumen seperti berikut.

![Mendeklarasikan CSS](img/Mendeklarasikan%20CSS%20Internal.jpg)

setelah itu lalu save , dan hasilnya akan seperti ini

![Hasilnya](img/Hasil%20Deklarasi%20CSS%20Internal.jpg)

3.**Menambahkan Inline CSS**

Tambahkan deklarasi inline CSS pada tag <p> seperti berikut ini.

![Inline CSS](img/Inline%20css.jpg)

Simpan perubahannya, maka hasilnya akan seperti berikut ini.

![Hasil Inline CSS](img/Hasil%20inline%20css.jpg)

4.**Membuat CSS Eksternal**

Buatlah file baru dengan nama style_eksternal.css kemudian buatlah deklarasi CSS seperti berikut.

![Deklarasi CSS Eksternal](img/deklarasi%20style%20css.jpg)

Seperti biasa save , lalu refresh kembali browsernya maka akan seperti berikut ini.

![Hasilnya](img/Hasil%20css%20eksternal.jpg)

5.**Menambahkan CSS Selector**

Untuk menambahkan CSS Selector menggunakan ID dan Class Selector pada file
style_eksternal.css, tambahkan kode berikut ini.

![Menambah CSS Selector](img/Id%20selector%20dan%20class%20selector.jpg)

Setelah itu save, dan refresh kembali. Maka akan seperti berikut.

![Hasilnya](img/Hasil%20id%20selector%20dan%20classnya.jpg)

## Soal & Pembahasan

1.  Lakukan eksperimen dengan mengubah dan menambah properti dan nilai pada kode CSS
    dengan mengacu pada CSS Cheat Sheet yang diberikan pada file terpisah dari modul ini.

Jawab :

![Eksperimen](img/Eksperimen%20.jpg)

2.  Apa perbedaan pendeklarasian CSS elemen h1 {...} dengan #intro h1 {...}? berikan
    penjelasannya!

Jawab :

Perbedaaannya jika elemen h1{} maka akan merubah semua yang ada didalam elemen h1 saja, sedangkan #intro h1{} akan merubah yang memiliki tag intro h1

3.  Apabila ada deklarasi CSS secara internal, lalu ditambahkan CSS eksternal dan inline CSS pada elemen yang sama. Deklarasi manakah yang akan ditampilkan pada browser? Berikan
    penjelasan dan contohnya!

Jawab :

jika ketiga CSS merubah elemen yang sama maka deklarasi tersebut akan mengikuti aturan prioritas dimana prioritas CSS nya seperti ini:

- inline CSS
- ID selector CSS
- internal CSS
- external CSS

Seperti gambar dibawah ini.

![no3](img/no3.jpg)

maka yang akan muncul seperti ini

![hasil](img/hasil%20no%203.jpg)

4.  Pada sebuah elemen HTML terdapat ID dan Class, apabila masing-masing selector tersebut
    terdapat deklarasi CSS, maka deklarasi manakah yang akan ditampilkan pada browser?
    Berikan penjelasan dan contohnya! ( < p id="paragraf-1" class="text-paragraf"> )

Jawab :

![hasil](img/bismilah1.jpg)

![hasil](img/bismilah2.jpg)

![hasil](img/bismilah.jpg)

Sekian dan Terimakasih
