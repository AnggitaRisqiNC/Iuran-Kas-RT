# Iuran Kas RT

## Anggota Kelompok <br>

| Nama                      | NIM       | Kelas     | Mata Kuliah     |
| ------------------------- | --------- | --------- | --------------- |
| Anggita Risqi Nur Clarita | 312210450 | TI.22.A.4 | Pemrograman Web |
| Faizah Via Fadhillah      | 312210460 | TI.22.A.4 | Pemrograman Web |
| Liskania Aprilia          | 312210383 | TI.22.A.4 | Pemrograman Web |
| Zahra Nurhaliza           | 312210364 | TI.22.A.4 | Pemrograman Web |

## Daftar Isi <br>

| No  | Description               | Link                                                                                    |
| --- | ------------------------- | --------------------------------------------------------------------------------------- |
| 1   | Instruction Project       | [Click Here](https://drive.google.com/file/d/1RfsqKEU6gQy6DWeW1E-BYQVkA7F3T4Vn/view)    |
| 2   | Introduction              | [Click Here](#introduction)                                                             |
| 3   | Database Tables           | [Click Here](#database-tables)                                                          |
| 4   | Which Is Use              | [Click Here](#which-is-used)                                                            |
| 5   | Fitur-Fitur Website       | [Click Here](#fitur-fitur-website-pengelolaan-iuran-kas-rt)                             |
| 6   | Demo Website (Hosting)    | [Click Here](https://naespa.my.id/)                                                     |
| 7   | Presentasi (Link Youtube) | [Click Here](https://youtu.be/CrEGKs6f2a8)                                              |
| 8   | Laporan (Link GDrive)     | [Click Here](https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/files/13844216/Laporan.pdf) |

## Introduction

Website ini menggunakan bahasa pemrograman **PHP** dan **database MySQL**. Website ini digunakan untuk mengelola iuran kas RT.

### Website ini memiliki fitur-fitur berikut:

- Menambah data warga : Menambah data warga baru ke dalam database

- Menampilkan data warga : Menampilkan data warga yang ada di database

- Mengubah data warga : Mengubah data warga yang ada di database

- Menghapus data warga : Menghapus data warga dari database

- Menambah transaksi iuran : Menambah transaksi iuran baru ke dalam database

- Menampilkan data warga yang belum membayar iuran berdasarkan bulan dan jenis iuran

- Menampilkan data iuran yang sudah dibayar berdasarkan nama warga

- Laporan jumlah uang iuran : Menampilkan laporan jumlah uang iuran

Website ini juga memiliki fitur **register** dan **login** untuk _role admin_ dan _role user_. Pengunjung yang belum memiliki akun dapat mendaftar terlebih dahulu. Setelah memiliki akun, pengunjung dapat login untuk mengakses fitur-fitur yang tersedia.

Pengunjung yang bertindak sebagai **admin** dapat melakukan **CRUD (Create, Read, Update, Delete)** data warga dan transaksi iuran. Pengunjung yang bertindak sebagai **user** hanya dapat **melihat data** warga dan transaksi iuran.

Website ini menerapkan tampilan **mobile first**, sehingga dapat diakses menggunakan perangkat **mobile phone**, **tablet**, dan **komputer** atau **laptop**.

Website CRUD Pengelolaan Iuran Kas RT ini juga dapat digunakan untuk **mencetak tampilan data-data warga, jumlah kas, dan laporan lainnya**. Fitur pencetakan ini tersedia dalam berbagai format, termasuk PDF, Excel, dan CSV.

## Database Tables

![13 Project UAS_page-0006](https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/5afacd71-d6f7-4ad3-859d-cd092f094d05)

Website ini menggunakan 3 tabel database MYSQL untuk menyimpan data yaitu **Tabel Users**, **Warga** dan **Iuran**.

### Tabel Users

![Screenshot 2024-01-05 125308](https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/f00302a3-67d3-497c-8998-37b6cd92baf5)

**Tabel users menyimpan data pengguna.** Fitur register dan login sudah tersedia untuk pengguna. Status = 1 artinya pengguna tersebut aktif, dan Status = 2 artinya pengguna tersebut tidak aktif. Role = 1 artinya pengguna tersebut bertindak sebagai admin, dan Role = 2 artinya pengguna tersebut bertindak sebagai pengguna biasa atau pengunjung.

### Tabel Warga

![Screenshot 2024-01-05 125334](https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/6a3696ac-017f-4682-8fe1-90bed42be7ee)

**Tabel warga menyimpan data warga.** Status = 1 artinya warga tersebut aktif, dan Status = 2 artinya warga tersebut nonaktif. Di website ini, semua warga yang datanya ditampilkan dianggap sebagai warga aktif.

### Tabel Iuran

![Screenshot 2024-01-05 125243](https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/52b2af20-4e92-45a0-b30f-743a19529d14)

**Tabel iuran menyimpan data iuran dari setiap warga.** Ada tiga kategori jenis_iuran:

- **jenis_iuran = 1** artinya iuran uang kas

- **jenis_iuran = 2** artinya iuran uang sampah

- **jenis_iuran = 3** artinya iuran sumbangan

## Which Is Used

1. **XAMPP**

   Dalam pembuatan sistem iuran kas RT ini, kami menggunakan XAMPP sebagai lingkungan pengembangan lokal. XAMPP terdiri dari Apache, MySQL, dan PHP. Apache adalah web server yang digunakan untuk menampilkan halaman web. MySQL adalah database server yang digunakan untuk menyimpan data. PHP adalah bahasa pemrograman server-side yang digunakan untuk membuat halaman web interaktif.

2. **VSCode**

   Untuk editor kode, kami menggunakan Visual Studio Code (VSCode). VSCode adalah editor kode sumber yang populer yang dapat digunakan untuk berbagai bahasa pemrograman. VSCode memiliki fitur-fitur yang memudahkan pengembang untuk menulis, mengedit, dan menjalankan kode.

3. **Bootstrap**

   Untuk membuat tampilan halaman web, kami menggunakan Bootstrap. Bootstrap adalah framework CSS yang populer yang dapat digunakan untuk membuat tampilan halaman web yang responsif. Bootstrap memiliki fitur-fitur yang memudahkan pengembang untuk membuat tampilan halaman web yang menarik dan mudah digunakan.

## Fitur-Fitur Website Pengelolaan Iuran Kas RT

### Home Page

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/30ed19fb-8f9a-40b5-a818-c5ff920aa7ed

**Halaman Home** adalah halaman pertama yang ditampilkan saat website diakses. Halaman ini berisi informasi umum tentang website, seperti judul website, logo, dan deskripsi website.

**Halaman About** adalah halaman yang berisi informasi tentang tim pengembang website, tujuan pembuatan website, dan fitur-fitur yang tersedia di website.

**Halaman What We Do** adalah halaman yang berisi penjelasan tentang fungsi website. Pada halaman ini, dijelaskan bahwa website ini digunakan untuk mengelola data iuran kas RT.

### Admin (Register dan Login Page)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/5947ee1f-b6d8-421f-8362-b1e19fea5edb

**Halaman Register and Login** adalah halaman yang digunakan untuk mendaftarkan akun baru atau masuk ke akun yang sudah ada seperti yang dicontohkan adalah Register dan Login akun dengan role sebagai admin. Halaman ini dirancang dengan tampilan yang menarik dan user-friendly, sehingga memudahkan pengguna untuk mendaftar dan masuk ke aplikasi.

### Admin (Data Warga dan Add Data Warga)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/74017a49-aed3-41d6-89ac-2c4e14d53476

**Halaman Data Warga** adalah halaman yang digunakan admin untuk melihat dan mengelola data warga. Informasi yang ditampilkan meliputi NIK, Nama, Jenis Kelamin, Nomor HP, Alamat dan Nomor Rumah. Di bagian kanan terdapat Action yang terdapat tombol-tombol aksi yang isinya adalah button untuk mengubah data warga, menghapus data warga, melihat transaksi iuran warga, dan menambahkan transaksi iuran warga.

**Halaman Add Data Warga** adalah halaman yang digunakan admin untuk menambahkan data warga baru. Hal yang harus ditambahkan adalah NIK, Nama, Jenis Kelamin, Nomor HP, Alamat dan Nomor Rumah. Untuk users_id ketika add data warga maka otomatis menjadi users_id = 1, users_id = 1 di dalam database users adalah admin.

### Admin (Update Data Warga)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/1b15839c-5b79-425d-9dfd-c8dbaf4777f8

**Halaman Update Data Warga** adalah halaman yang digunakan admin untuk mengubah data warga yang sudah ada, data yang dapat diubah meliputi NIK, Nama, Jenis Kelamin, Nomor HP, Alamat dan Nomor Rumah.

### Admin (Add Data Iuran dan Lihat Data Iuran Warga)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/e00e9016-7019-432d-b671-6e4dbad4a6ed

**Halaman Add Data Iuran Warga** adalah halaman yang digunakan admin untuk menambahkan data iuran warga. Hal yang harus ditambahkan adalah jenis iuran, Nominal, Tanggal Pembayaran dan Keterangannya.

**Halaman Lihat Data Iuran Warga** adalah halaman yang digunakan admin untuk melihat informasi tentang iuran warga. Informasi yang ditampilkan meliputi Nama, Jenis Iuran, Nominal, Tanggal Pembayaran, dan Keterangan berdasarkan nama warganya.

### Admin (Data Warga Belum Bayar Kas)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/ce66d8b0-fc6c-4652-9fd8-bb59f140142e

**Halaman Data Warga Belum Bayar Kas** adalah halaman yang digunakan admin untuk melihat daftar warga yang belum membayar iuran kas berdasarkan tahun-bulan dan jenis iurannya.

### Admin (Lihat Jumlah Kas)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/4a670e57-3211-4199-b9d9-0866e5a61cd7

**Halaman Lihat Jumlah Kas** adalah halaman yang digunakan admin untuk melihat informasi tentang jumlah uang kas yang terdata selama 1 tahun. Dipisahkan berdasarkan jenis iuran dan bulannya. Serta terdapat elemen option untuk memilih tahunnya.

### Admin (Hapus Data Warga)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/168b064c-9d0b-4f7c-ba27-69041f8f889f

**Hapus Data Warga** adalah tombol aksi yang digunakan admin untuk menghapus data warga. Ketika diklik maka akan memunculkan pop-up yang akan menanyakan kembali apakah admin yakin ingin menghapus data warga tersebut.

### User (Register dan Login Page)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/c21c5c42-11d1-46b0-b56a-a66c57feb6e3

**Halaman Register and Login** adalah halaman yang digunakan untuk mendaftarkan akun baru atau masuk ke akun yang sudah ada seperti yang dicontohkan adalah Register dan Login akun dengan role sebagai user. Halaman ini dirancang dengan tampilan yang menarik dan user-friendly, sehingga memudahkan pengguna untuk mendaftar dan masuk ke aplikasi.

### User (Data Warga dan Lihat Transaksi)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/8dad422b-0658-45a7-acb3-26b366a72c9f

**Dashboard User** adalah halaman yang ditampilkan saat pengguna yang sudah terdaftar login ke website. Halaman ini berisi informasi umum tentang data warga yang ada di Perumahan Kwangya.

**Halaman Lihat Transaksi** adalah halaman yang digunakan pengguna untuk melihat informasi tentang transaksi iuran yang telah dilakukan. Informasi yang ditampilkan meliputi Nama, Jenis Iuran, Nominal, Tanggal Pembayaran, dan Keterangan berdasarkan nama warganya.

### User (Lihat Jumlah Kas)

https://github.com/AnggitaRisqiNC/Iuran-Kas-RT/assets/115614419/917213fd-7c1c-4476-add0-19d0037bca78

**Halaman Lihat Jumlah Kas** adalah halaman yang digunakan pengguna untuk melihat informasi tentang transaksi iuran yang telah terdata selama 1 tahun. Dipisahkan berdasarkan jenis iuran dan bulannya. Serta terdapat elemen option untuk memilih tahunnya.

## Finish

<img align="left" width="150" height="150" src="https://octodex.github.com/images/spidertocat.png"></a>

Terima kasih telah meluangkan waktu untuk membaca penjelasan mengenai **project UAS Pemrograman Web** kami hingga akhir tentang Sistem **_Pengelolaan Kas RT_**.

Kami harap penjelasan ini dapat memberikan gambaran yang jelas tentang fitur-fitur yang tersedia di website Pengelolaan Kas RT.

~ _**Kelompok 11**_
