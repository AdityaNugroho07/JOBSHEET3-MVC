# JOBSHEET3-MVC
# A. Apa itu MVC?
MVC (Model View Controller) adalah pola desain perangkat lunak yang memisahkan aplikasi menjadi tiga komponen utama: Model, View, dan Controller. MVC membantu mengorganisir kode dengan cara yang modular, membuat pengembangan, pemeliharaan, dan pengujian aplikasi menjadi lebih muda.

- Model bertanggung jawab untuk manajemen data dan logika bisnis.
- View menangani antarmuka pengguna dan representasi data.
- Controller mengatur interaksi antara Model dan View, dan menangani logika aplikasi serta masukan pengguna.
# 1. Coding MahasiswaController
# <img width="320" alt="Mahasiswa controller" src="https://github.com/user-attachments/assets/3291df38-22a9-4886-85a0-179401448790">
# 1. Deklarasi Class
- class MahasiswaController {(membuat sebuah kelas).
- Kelas ini akan berfungsi sebagai controller untuk menangani data mahasiswa.
# 2. Method index
- require_once "Model/MahasiswaModel.php";:  Mengimpor file MahasiswaModel.php agar dapat menggunakan model MahasiswaModel.
- $model = new MahasiswaModel();: Membuat objek dari model MahasiswaModel.
- $data = $model->getAllMahasiswa();: Memanggil metode getAllMahasiswa() dari model untuk mendapatkan semua data mahasiswa dan menyimpannya di variabel $data.
- require_once "View/Mahasiswa.php";: Memuat file view Mahasiswa.php untuk menampilkan data mahasiswa ke pengguna.
# 3. Method show
- require_once "Model/MahasiswaModel.php";: Mengimpor file MahasiswaModel.php agar dapat menggunakan model MahasiswaModel.
- $model = new MahasiswaModel();: Membuat objek dari model MahasiswaModel.
- $data = $model->getMahasiswaById($id);: Memanggil metode getMahasiswaById($id) untuk mendapatkan data mahasiswa berdasarkan ID tertentu.
- require_once "View/Mahasiswa_detail.php";: Memuat file view Mahasiswa_detail.php untuk menampilkan detail mahasiswa ke pengguna.
# Kesimpulan
- MahasiswaController adalah bagian dari sistem MVC yang mengatur logika alur data antara model dan view.
- Model (MahasiswaModel): Menyediakan data mahasiswa.
- View (Mahasiswa.php, Mahasiswa_detail.php): Menampilkan data kepada pengguna.
# 2. Coding ProgramStudiController
# <img width="347" alt="PROGRAM STUDI CONTROLLER" src="https://github.com/user-attachments/assets/f9fc1631-a704-4c21-937a-1f0bff49a3f5">
# 1. Method index
- Fungsinya menampilkan daftar seluruh program studi yang tersedia.
1. require_once "Model/ProgramStudiModel.php";
   - Mengimpor file ProgramStudiModel.php agar dapat menggunakan model     
     ProgramStudiModel.
   - Model ini bertugas menyediakan data program studi.
2. $model = new ProgramStudiModel();
   - Membuat objek dari kelas ProgramStudiModel.
   - Objek ini digunakan untuk mengakses fungsi-fungsi dalam model.
3. $data = $model->getAllProgramStudi();
   - Memanggil metode getAllProgramStudi() dari model ProgramStudiModel.
   - Fungsi ini akan mengambil semua data program studi dari sumber data 
     (misalnya database) dan menyimpannya dalam variabel $data.
4. require_once "View/ProgramStudiView.php";
   - Memuat file ProgramStudiView.php yang merupakan view untuk menampilkan 
     data program studi ke pengguna.
# 3. Coding MahasiswaModel
# <img width="430" alt="MAHASISWA MODEL" src="https://github.com/user-attachments/assets/614a17c6-7c3d-4e27-935d-19fd313083ad">
# 1. Class database
1. public $koneksi;
   - Properti $koneksi digunakan untuk menyimpan koneksi ke database.
2. public function__construct()
   - Konstruktor kelas yang otomatis dijalankan saat objek Database dibuat.
   - Menggunakan fungsi mysqli_connect() untuk membuat koneksi ke database:
     - "localhost": Alamat server database.
     - "root": Username untuk database.
     - "": Password untuk database (kosong dalam kasus ini).
     - "universitas": Nama database yang digunakan.
3. $this->koneksi
   - Menyimpan koneksi yang dihasilkan oleh mysqli_connect() sehingga dapat 
     digunakan oleh kelas lain yang mewarisinya.
# 2. Class MahasiswaModel
Fungsi nya kelas ini mewarisi koneksi database dari database dan digunakan untuk mengambil data mahasiswa. 
1. class MahasiswaModel extends Database
   - Kelas MahasiswaModel mewarisi semua properti dan metode dari kelas 
     Database.
   - Secara otomatis memiliki properti $koneksi dari Database.
2. getAllMahasiswa()
   - Tujuan: Mengambil semua data mahasiswa dari tabel mahasiswa di database.
   - Langkah-langkah:
     - Membuat query SQL: "SELECT * FROM mahasiswa".
     - Menjalankan query menggunakan mysqli_query() dengan koneksi yang 
       tersedia di $this->koneksi.
     - Mengembalikan hasil query.
3. getMahasiswaById($id)
   - Tujuan: Mengambil data mahasiswa berdasarkan ID.
   - Langkah-langkah:
     - Membuat query SQL: "SELECT * FROM mahasiswa WHERE id = '$id'".
     - Menjalankan query menggunakan mysqli_query() dengan koneksi 
       $this>koneksi.
     - Mengembalikan hasil query.
# 4. Coding ProgramStudiModel
# <img width="440" alt="PROGRAM STUDI MODEL" src="https://github.com/user-attachments/assets/df7adeee-0b81-4e71-9e2a-855670aba92c">
# 1. Class database
Fungsi kelas database bertugas untuk membuat koneksi ke database MySQL.
1. public $koneksi;
   - Properti $koneksi digunakan untuk menyimpan koneksi ke database.
2. public function __construct()
   - Konstruktor ini otomatis dipanggil saat objek Database dibuat.
   - Menggunakan fungsi mysqli_connect() untuk membuat koneksi ke database:
     - "localhost": Server database (di sini menggunakan localhost).
     - "root": Username database.
     - "": Password database (kosong pada konfigurasi ini).
     - "universitas": Nama database yang akan digunakan.
3. $this->koneksi
   - Properti ini menyimpan koneksi hasil dari mysqli_connect() sehingga dapat 
   digunakan oleh kelas lain yang mewarisi Database.
# 2. Class ProgramStudiModel
Fungsi kelas ini adalah untuk mengelola data program studi dan mewarisi dari database.
1. class ProgramStudiModel extends Database
   - Kelas ProgramStudiModel adalah turunan dari kelas Database.
   - Dengan pewarisan ini, ProgramStudiModel otomatis memiliki properti 
     $koneksi dan metode dari Database.
2. getAllProgramStudi()
   - Tujuan: Mengambil semua data dari tabel program_studi dalam database.
   - Langkah-langkah:
     - Mendefinisikan query SQL: "SELECT * FROM program_studi".
     - Menjalankan query menggunakan mysqli_query() dengan parameter koneksi - 
       $this->koneksi. 
     - Mengembalikan hasil query berupa resource atau false jika gagal.
# 5. Mahasiswa_detail
# <img width="595" alt="MAHASISWA DETAIL" src="https://github.com/user-attachments/assets/04185330-8659-4df9-8ace-d38565a41c5d">
# 1. Bagian HTML
1. (!DOCTYPE html)
   - Mendefinisikan bahwa dokumen ini menggunakan HTML5.
2. (html lang="en")
   - Membuka tag HTML dengan atribut lang="en", menunjukkan bahwa bahasa 
     dokumen adalah bahasa Inggris.
3. (head)
   - Bagian ini berisi metadata dokumen:
     - <meta charset="UTF-8">: Mengatur karakter encoding dokumen ke UTF-8.
     - <meta name="viewport" content="width=device-width, initial-scale=1.0">: 
       Membuat dokumen responsif di berbagai perangkat.
     - <title>Document</title>: Menentukan judul halaman yang tampil di tab 
       browser.
 4. (body)
    - Membuka bagian utama halaman.
5. (table)
    - Membuat tabel untuk menampilkan data.
    - (tr): Membuat baris tabel.
    - (th): Membuat header tabel dengan kolom
      - Nama
      - NIM
      - Prodi

# 2. Bagian PHP
1. $data = array
   - Membuat sebuah array berisi data mahasiswa.
   - Data mahasiswa terdiri dari tiga atribut:
     - 'nama': Nama mahasiswa.
     - 'nim': Nomor Induk Mahasiswa.
     - 'program_studi': Program studi mahasiswa.
   - Contoh data:
     - Nama: Aditya Nugroho
     - NIM: 230302073
     - Prodi: Teknik Informatika
2. foreach ($data as $row)
   - Perulangan untuk membaca setiap elemen di dalam array $data.
   - Setiap elemen disimpan sementara ke dalam variabel $row.
3. (tr) dan (td)
   - Membuat baris baru di tabel (tr).
   - Membuat sel tabel (td) untuk menampilkan:
     - Nama: <?php echo $row['nama']; ?>
     - NIM: <?php echo $row['nim']; ?>
     - Program Studi: <?php echo $row['program_studi']; ?>
4. ?> dan <?php
   - Menandai awal dan akhir blok kode PHP.

# 6. Coding Mahasiswa
# <img width="362" alt="MAHASISWA VIEW" src="https://github.com/user-attachments/assets/d2d3c746-280f-4ae0-b9c3-d4fd496bef63">
# 1. Bagian HTML
1. (html) dan (head)
   - Mendefinisikan dokumen HTML dan metadata.
   - <meta charset="UTF-8">: Mengatur karakter encoding dokumen ke UTF-8.
   - <meta name="viewport" content="width=device-width, initial-scale=1.0">: 
     Membuat halaman responsif.
   - <title>Document</title>: Menentukan judul halaman web.
2. CSS di dalam <style>
   - table { border-collapse: collapse; width: 100%; }
     - Mengatur tabel agar tidak ada jarak antar border, dan tabel memenuhi 
       lebar halaman.
   - th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
     - Memberikan gaya pada header dan sel tabel, termasuk border, padding, 
       dan perataan teks.
   - th { background-color: #f0f0f0; }
     Mengatur latar belakang header tabel agar berwarna abu-abu terang.
3. Tabel
   - Membuat tabel dengan tiga kolom utama: Nama, NIM, dan Prodi.
   - (tr): Membuat baris tabel.
   - (th): Menandai header kolom tabel.
# 2. Bagian PHP
1. foreach ($data as $row)
   - Perulangan untuk membaca setiap elemen dari array $data.
   - Setiap elemen disimpan sementara ke dalam variabel $row.
2. (tr) dan (td)
   - Membuat baris baru untuk setiap elemen dalam array $data.
   - (td)<?php echo $row['nama']; ?></td>: Menampilkan nama mahasiswa.
   - (td)<?php echo $row['nim']; ?></td>: Menampilkan NIM mahasiswa.
   - (td)<?php echo $row['program_studi']; ?></td>: Menampilkan program studi 
     mahasiswa.
# 7. Coding ProgramStudiView
# <img width="386" alt="PROGRAM STUDI VIEW" src="https://github.com/user-attachments/assets/c870002c-5f7d-4f98-859a-053a1f3743a5">
# 1. Struktur HTML
1. (html lang="en")
   - Menunjukkan bahwa bahasa utama halaman adalah bahasa Inggris.
2. (meta) Tags
   - (meta charset="UTF-8"): Mengatur karakter encoding ke UTF-8 untuk 
     mendukung berbagai karakter.
   - (meta name="viewport" content="width=device-width, initial-scale=1.0"): 
     Membuat halaman responsif pada berbagai ukuran layar.
3. CSS dalam (style)
   - Tabel:
     - Border diatur menggunakan border-collapse: collapse agar border 
       terlihat menyatu.
     - Lebar tabel diatur penuh dengan width: 100%.
   - Header dan Sel Tabel:
     - border: 1px solid #ddd;: Memberikan garis pada tabel.
     - padding: 8px;: Menambahkan jarak antara teks dan garis tabel.
     - text-align: left;: Menyelaraskan teks ke kiri.
   - Header Tabel:
     - Latar belakang header diberi warna abu-abu terang (background-color: 
       #f0f0f0;).
4. Tabel Header
   - (tr): Membuat baris untuk header tabel.
   - (th)Prodi(/th): Kolom header hanya mencantumkan "Prodi".
# 2. PHP dan Tabel Data
1. foreach ($data as $row)
   - Melakukan perulangan untuk membaca setiap elemen dalam array $data.
2. Baris Data Tabel (tr)
   - Membuat baris tabel baru untuk setiap elemen dalam $data.
   - Kolom 1 (td):
     - Menampilkan nilai nama dari elemen $row menggunakan <?php echo 
       $row['nama']; ?>.
   - Kolom 2 (<td><a href=""></a></td>):
     - Kolom ini kosong karena atribut href pada tautan belum diisi.
# 8. Index.php
# <img width="275" alt="INDEX PHP" src="https://github.com/user-attachments/assets/c81763f0-fb08-4d3f-9ad4-6e3612c13437">
# Penjelasan
1. require_once "Controller/MahasiswaController.php";
   - Baris ini mengimpor file MahasiswaController.php, yang terletak di dalam 
     folder Controller.
   - File ini harus mendefinisikan kelas MahasiswaController yang bertanggung 
     jawab mengatur logika terkait data mahasiswa.
2. require_once "Controller/ProgramStudiController.php";
   - Baris ini mengimpor file ProgramStudiController.php, yang terletak di 
     dalam folder Controller.
   - File ini harus mendefinisikan kelas ProgramStudiController yang 
     bertanggung jawab mengatur logika terkait data program studi.
3. $app = new MahasiswaController();
   - Membuat objek baru dari kelas MahasiswaController.
     Objek ini digunakan untuk memanggil metode atau fungsi yang ada dalam 
     kelas MahasiswaController.
4. $app->index();
   - Memanggil metode index() dari objek $app, yang merupakan instance dari 
     MahasiswaController.
   - Metode index() biasanya digunakan untuk menangani logika awal, seperti 
     menampilkan daftar mahasiswa atau memuat halaman utama yang terkait.
# 9. Tampilan Mahasiswa
# <img width="908" alt="TAMPILAN MAHASISWA" src="https://github.com/user-attachments/assets/e2eb9677-ba33-4f46-83bd-6345bd169cac">
# 10. Tampilan Prodi
# <img width="854" alt="TAMPILAN PRODI" src="https://github.com/user-attachments/assets/d7360fb1-a3e5-4f44-9593-db55736740f4">













   







