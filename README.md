<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Website Daftar Guru</h1>
    <br>
</p>

Dengan adanya aplikasi daftar guru ini, semua berkas yang berhubungan dengan kegiatan guru akan terorganisasi dengan rapi. Hal ini tentu saja akan mempermudah dan mempercepat proses kegiatan sehari-hari guru. Daftar hadir guru ini digunakan untuk mencatat jumlah guru yang hadir saat kegiatan sudah dilaksanakan. Daftar hadir seperti ini sangat dibutuhkan oleh para pelaku kegiatan karena memiliki gunaan yang sangat luas. Fungsi dari aplikasi ini selain untuk mempermudah pencatatan, juga dapat menghindarkan resiko kehilangan data pengarsipan karena dijadikan data baku.

## Features

- Data Daftar Guru
- Jadwal Mengajar
- Mata Pelajaran dan Kelas 

## Tech

Website ini dibangun menggunakan :

- [HTML](https://www.w3schools.com/html/) bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. 
- [CSS](https://www.w3schools.com/css/) singkatan dari Cascading Style Sheet yang dipergunakan untuk menentukan tampilan dan format pada sebuah website. Artinya, dengan adanya CSS bisa mengatur mulai dari font, warna tulisan dan latar belakang pada website tersebut.
- [Bootstrap](https://getbootstrap.com/) kerangka kerja CSS yang sumber terbuka dan bebas untuk merancang situs web dan aplikasi web. 
- [PHPMyAdmin](https://www.phpmyadmin.net/) perangkat lunak bebas yang ditulis dalam bahasa pemrograman PHP yang digunakan untuk menangani administrasi MySQL melalui website Jejaring Jagat Jembar. 
- [Yii2 framework](https://www.yiiframework.com/) adalah framework pemrograman umum Web yang bisa dipakai untuk mengembangkan semua jenis aplikasi Web.

## Installation

Clone Project
```sh
git clone https://github.com/ayunoviwdrt/daftarguru.git
```

Instal Composer

```sh
composer install
```

Membuat database di config sesuai dengan db.php

```sh
dbname=daftarguru
```

Applying Migrations 

```sh
yii migrate
```

Hasil Run Website Daftar Guru
```sh
php yii serve --port=8990
```
```sh
localhost:8990
```

## Plugins

| Plugin | README |
| ------ | ------ |
| GitHub | [plugins/github/README.md] |