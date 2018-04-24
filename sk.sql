-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mei 2016 pada 02.24
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` text NOT NULL,
  `konten` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `id_user`, `id_kategori`, `foto`, `konten`, `tanggal`, `slug`) VALUES
(32, 'Sublime Text', 1, 32, 'foto/21.png', '<p align="justify">Sublime Text merupakan text editor berbagai bahasa pemrograman mulai dari&nbsp;<em>C </em>hingga&nbsp;<em>Java</em>,\r\n menurut penulis Sublime Text merupakan text editor yang sangat baik dan\r\n nyaman untuk digunakan sebagai alat berkoding ria. Karena tampilannya \r\nyang minimalis namun elegant, bawaannya yang ringan namun diboboti \r\ndengan keakuratan dalam penulisan yang mengikuti algoritma dan aturan \r\nsetiap bahasa pemrograman yang digunakan. Intinya penulis sangat \r\nmerekomendasikan untuk menjadikan Sublime Text sebagai text editor yang \r\nmeski digunakan.</p><p align="justify"><br></p><p align="justify">Kini pada versi terbaru Sublime Text dengan paket dependasi&nbsp;<em>*.deb</em>&nbsp;sudah dapat dijalankan pada distro linux Debian dan turunannya seperti Ubuntu.</p><p align="justify"><br></p><p align="justify">Pada\r\n update kali ini, Sublime Text mencegah plugin merusak Sublime Text, dan\r\n mempercepat pembukaan aplikasi di awal. Selain peningkatan kecepatan, \r\nsekarang Sublime Text juga menggunakan Python 3.3 untuk setiap plugin, \r\nserta memperkenalkan&nbsp;<strong>symbol indexing</strong>&nbsp;yang membaca semua file dalam sebuah proyek untuk dibuat indeks simbol pada saat pencarian.</p><p align="justify"><br></p><p align="justify">Pengembang\r\n Sublime Text, Jon Skinner&nbsp;menjelaskan bahwa lisensi Sublime Text 3 akan\r\n dijual dengan harga $70, bertambah $11 dari harga sebelumnya yang hanya\r\n $59, walaupun kamu dapat menggunakan setiap fitur Sublime Text secara \r\nlengkap tanpa membutuhkan lisensi.</p><p align="justify"><br></p><div align="justify"><ul><li><strong>Simbol Indexing.</strong></li></ul></div><p align="justify"><br></p><p align="justify">Teks Sublime sekarang memindai file dalam proyek Anda, dan \r\nmembangun sebuah indeks yang berisi file yang simbol. Ini fitur baru \r\nGoto Definisi dan Goto Simbol di Proyek, yang keduanya tersedia dari \r\nmenu Goto. Goto Definition membawa Anda ke definisi simbol di bawah \r\ntanda sisipan, sementara Goto Simbol di Proyek meminta Anda untuk \r\nmemilih simbol melalui pencocokan fuzzy, dan kemudian membawa Anda ke \r\ndefinisi simbol itu.</p><p align="justify"><br></p><div align="justify"><ul><li><strong>Manajemen Pane</strong>.</li></ul></div><p align="justify"><br></p><p align="justify">Bekerja dengan beberapa panel sekarang lebih efisien, dengan \r\nperintah untuk menciptakan dan menghancurkan panel, dan cepat \r\nmemindahkan file antara panel. Anda dapat melihat pilihan baru di bawah \r\nView / Grup, View / Focus Group dan Lihat / Move file Group.</p><p align="justify"><br></p><div align="justify"><ul><li><strong>Kecepatan</strong>.</li></ul></div><p align="justify"><br></p><p align="justify">Teks Sublime selalu memiliki kecepatan sebagai fitur, namun \r\nversi 3 alamat beberapa titik lemah. Waktu startup sekarang hampir \r\nsegera, dan plugin tidak lagi memiliki kesempatan untuk membawa ini ke \r\nbawah. Ganti Semua kinerja juga secara signifikan lebih cepat.</p><p align="justify"><br></p><p align="justify">Teks\r\n Sublime sekarang menggunakan Python 3.3 untuk plugin, dan berjalan \r\nmereka keluar dari proses, sehingga setiap plugin yang memuat kode asli \r\nada risiko lagi menerjang proses Teks Sublime utama. API ini juga \r\nsepenuhnya benang-aman, dan menyediakan beberapa callback yang berjalan \r\nasynchronously (misalnya, on_modified_async). Ada juga fungsi API baru, \r\ntermasuk akses penuh ke data proyek. Teks Sublime 2 plugin akan \r\nmembutuhkan port untuk bekerja dengan Sublime Text 3, namun dalam banyak\r\n kasus perubahan akan menjadi kecil.</p><p align="justify"><br></p><div align="justify"><ul><li>Perubahan yang dipilih:</li><li>Ditambahkan Goto Definisi, dan Goto Simbol di Proyek</li><li>Secara signifikan meningkatkan waktu startup</li><li>Secara signifikan meningkatkan kinerja semua</li><li>Peningkatan algoritma pencocokan digunakan untuk Goto Apa saja dan auto-complete menerima karakter dialihkan</li><li>UI: Peningkatan manajemen pane</li><li>UI: Meninjau file dari sidebar menciptakan tab pratinjau</li><li>UI: Peningkatan animasi di side bar</li><li>Proyek: Beberapa ruang kerja dapat dibuat untuk satu proyek</li><li>Proyek: Ketika menambahkan folder ke sidebar, symlink tidak diikuti \r\nsecara default. Hal ini dapat diubah dengan memungkinkan follow_symlinks\r\n dalam proyek</li><li>Membangun Sistem: Ditambahkan â€˜shell_cmdâ€™, yang menggantikan â€˜cmdâ€™, dengan sintaks yang lebih intuitif</li><li>Membangun Sistem: PATH penanganan perilaku yang lebih baik pada OS X saat menggunakan shell_cmd</li><li>Membangun Sistem: â€˜Membuatâ€™ membangun sistem memiliki perbaikan pesan error regex</li><li>Membangun Sistem: Sintaks file dapat ditentukan untuk output</li><li>Membangun Sistem: Word wrap diaktifkan secara default</li><li>Temukan di File: Peningkatan penanganan file biner</li><li>Temukan di File: nomor baris yang tersembunyi dalam output</li><li>Cari: Cari di Seleksi tidak akan lagi secara otomatis dipilih</li><li>OSX: Peningkatan kinerja pada Retina display</li><li>OSX: 10.7 atau yang lebih baru diperlukan</li><li>OSX: 64 bit hanya</li><li>OSX: versi Sistem Python tidak lagi ketergantungan</li><li>OSX: Italic font disintesis ketika tidak tersedia di tipografi</li><li>Linux: File Deb disediakan</li><li>Linux: Mulai dari baris perintah akan daemonize proses secara default</li><li>API: Upgrade dari Python 2.6 ke Python 3.3</li><li>API: Plugin menjalankan out-of-process</li><li>API: Plugin API sekarang-thread aman</li><li>API: Beberapa peristiwa API sekarang menjalankan asynchronously</li><li>API: begin_edit () / end_edit () tidak lagi dapat diakses</li><li>API: Proyek yang terkena API</li><li>API: Ditambahkan window.settings () dan window.template_settings ()</li><li>API: show_quick_panel () menerima sebuah panggilan balik on_highlighted</li></ul></div><p align="justify"><br></p><p align="justify">Sublime Text 3 harus bekerja pada semua sistem yang saat ini \r\ndijalankan Sublime Text 2, dengan pengecualian OS X 10.6. Sayangnya, hal\r\n itu belum mungkin untuk mempertahankan 10,6 kompatibilitas, karena \r\ntidak ada C ++ 11 toolchain untuk OS X 10.6, dan Sublime Text 3 membuat \r\nekstensif menggunakan fungsi di C ++ 11.</p><p align="justify"><br></p><p align="justify">Harga untuk kunci lisensi\r\n Teks Sublime telah meningkat sebesar $ 11, dari $ 59 sampai $ 70, \r\nkenaikan harga pertama dalam sejarah Sublime Text lima tahun. Semua \r\nlisensi dibeli dengan harga baru ini berlaku untuk Teks Sublime 3 \r\nPengguna dengan Text 2 kunci lisensi Sublime dapat terus menggunakan \r\nkunci dengan Sublime Text 3 sementara itu dalam versi beta. Ketika 3.0 \r\ndirilis, upgrade akan tersedia untuk $ 30, atau $ 15 untuk pengguna yang\r\n telah membeli baru-baru ini. Memotong Tanggal untuk harga upgrade \r\nberkurang akan didasarkan pada tanggal yang sebenarnya dari rilis 3.0</p><p align="justify"><br></p><p align="justify">Untuk\r\n mempermudah bekerja di Sublime Text, sebaiknya kita membuat project \r\nterlebih dahulu. Caranya, buka jendela Sublime Text baru, kemudian \r\nfolder tempat file-file yang akan kita edit kita drag ke dalam jendela \r\nSublime Text, kemudian simpan project tersebut melalui Project -&gt; \r\nSave Project As. Sublime Text akan mengindex semua file di dalam folder \r\ntersebut supaya fitur2 Goto bisa bekerja. Proses indeks pun berjalan \r\ncepat, sebagai contoh, script-script WordPress bisa diindeks semua dalam\r\n waktu sekitar 20 detik saja.<br>\r\nDengan membuat project, maka kita bisa berpindah-pindah project dengan \r\ncepat, dengan menekan Ctrl + Alt + P, lalu pilih project dari list \r\nproject.<br>\r\nSaat kita berpindah project atau saat Sublime Text ditutup, kita tidak \r\nakan diganggu dengan dialog konfirmasi untuk menyimpan file. Semua file \r\nyang belum disave akan kembali lagi (tidak hilang) saat project dibuka \r\nlagi.</p><p align="justify"><br></p><p align="justify"><strong>Kelebihan Sublime Text3 :</strong></p><p align="justify"><br></p><div align="justify"><ul><li><strong>Multi Platform</strong><br>\r\nKelebihan pertama dari Sublime Text adalah software ini tersedia dalam \r\nberbagai platform sistem operasi, antara lain Windows, Linux dan MacOs.</li><li><strong>Plugin</strong><br>\r\nPlugin-nya sangat beragam, sehingga bisa memudahkan programmer dalam \r\nmengembangkan software-nya.&nbsp;Sublime Text juga memiliki sangat banyak \r\npackage. Untuk menginstall package kita bisa menjalankan Package Manager\r\n kemudian akan muncul list package, kita tinggal mencari (tentu saja \r\nmenggunakan fuzzy search juga) package yang diinginkan.Kelebihan \r\nmenggunakan package manager adalah package akan otomatis terupdate jika \r\nada versi baru. Sublime Text juga menyediakan plugin API untuk kita yang\r\n ingin membuat package sendiri menggunakan bahasa python.</li></ul></div><p align="justify"><br></p><div align="justify"><ul><li><strong>Go To Anything</strong>Dengan Goto Anything, kita bisa \r\nmembuka file di dalam project dengan cepat, tinggal tekan Ctrl + P \r\nkemudian ketik nama filenya. Untuk mencari nama file tidak harus \r\nmengetik secara tepat, karena Sublime Text menggunakan algoritma fuzzy \r\nuntuk searching nya.</li><li><strong>Drag &amp; Drop</strong><br>\r\nMenyeret dan melepas file teks ke dalam editor akan membuka tab baru \r\nsecara otomatis. Anda juga bisa menentukan lokasi tab pada saat menyeret\r\n file teks tersebut.</li><li><strong>Membuka File Besar</strong><br>\r\nSublime Text mampu membuka dan mengedit sebuah file teks yang sangat besar tanpa masalah.</li><li><strong>Membuka banyak dokumen sekaligus ke dalam tab baru</strong></li><li><strong>Command Palette</strong>Sublime Text memiliki tampilan yang \r\nlebih simple dan sangat minim menu, bahkan tidak ada toolbar sama \r\nsekali. Kebanyakan perintah-perintahnya bisa kita akses menggunakan \r\nShortcut, atau kalau belum hafal shortcut kita bisa mengakses Command \r\nPalette (tekan Ctrl + Shift + P) kemudian cari perintah yang kita \r\ninginkan (menggunakan fuzzy search). Sebagai contoh, saya ingin membuat \r\nteks menjadi uppercase, maka teks tersebut saya blok dulu, kemudian \r\nmasuk Command Palette dan ketik â€œcaseâ€ atau â€œupcâ€ maka akan muncul \r\nperintah untuk uppercase\r\n<p><strong>Column Editing</strong></p>\r\n<p>Baik Notepad++ maupun Sublime Text memiliki fitur ini. Di Notepad++ \r\ntekan Alt kemudian mouse didrag ke bagian yang ingin diedit. Di Sublime \r\nText menggunakan drag tombol mouse tengah, atau bisa juga dengan Shift +\r\n drag tombol mouse kanan.</p>\r\n\r\n</li></ul></div><p align="justify"><br></p><div align="justify"><ul><li><strong>Split Editing</strong>Jika and memiliki monitor yang lebar \r\nmaka kedua editor ini sangat cocok karena sama-sama memiliki fitur untuk\r\n Split Editing (membuka 2 atau lebih file secara berdampingan).</li></ul></div><p align="justify"><br></p><div align="justify"><ul><li><strong>Auto- Completion</strong>Sublime Text memiliki auto complete\r\n untuk beberapa bahasa yang saya pakai seperti PHP, CSS, Javascript. \r\nFitur ini juga mendukung fuzzy search sehingga tidak harus mengetik \r\nsecara tepat.&nbsp;Notepad++ juga memiliki auto complete, namun tidak \r\nsenyaman Sublime Text dan harus diaktifkan dulu melalui Settings -&gt; \r\nPreferences -&gt; Backup/Auto-Completion.</li></ul></div><p align="justify"><br></p><div align="justify"><ul><li><strong>Mini map / document map&nbsp;</strong>Sublime Text memiliki Minimap, semacam versi mini dari file untuk mempermudah melihat file secara keseluruhan.</li></ul></div><p align="justify"><br></p><div align="justify"><ul><li><strong>Go To Definition</strong>Ini adalah fitur baru Sublime Text 3\r\n (di ST2 blm ada). Fitur ini sangat membantu menemukan function/class di\r\n dalam project, caranya dengan meletakkan cursor di nama function/class \r\nkemudian tekan F12, maka file yang berisi definisi function/class \r\ntersebut akan terbuka. Untuk melihat list semua function/class bisa \r\nmenggunakan Goto Symbol in Project (tekan Ctrl + Shift + R).&nbsp;Notepad++ \r\nbelum memiliki fitur ini. Fitur semacam ini sangat jarang di text editor\r\n biasa, kebanyakan ada di IDE kelas berat seperti NetBeans, Zend Studio,\r\n dll.</li></ul></div><p align="justify"><br></p><p align="justify"><strong>Kelemahan :</strong></p><p align="justify"><br></p><div align="justify"><ul><li>Ada beberapa plugin yang terdapat pada notepad ++ yang belum ada di sublime text<strong>.</strong>Sekian postingan saya kali inii, semoga bermanfaat <span title=":D" class="wp-smiley wp-emoji wp-emoji-bigsmile">:D</span></li></ul></div><p align="justify"><br></p>', '03 Jan 2016 09:39 am', 'sublime-text'),
(52, 'Back end Vs Front end Developer', 1, 33, 'foto/19.jpg', '<p align="justify">Dikalangan developer mungkin kedua kata ini sudah biasa terdengar, baik Back-end ataupun Front-end keduanya adalah bagian penting dalam pembuatan suatu aplikasi baik berupa aplikasi desktop, web ataupun mobile.Dalam dunia developer biasanya akan dibagi menjadi dua bagian atau dua tim berbeda, misalkan:<br><br>Sebuah developer website menerima pesanan pembuatan website, perusahaan tersebut hanya memberikan gambar website yang mereka inginkan (atau yang biasa disebut mockup). Disinilah peran Back-end dan Front-End developer dibedakan, yang pertama memulai pekerjaan adalah Front-End, para Front-End developer akan memulai tugas mereka yang pertama yaitu merubah gambar(mockup) tadi menjadi sebuah halaman web static berbentuk HTML (atau yang biasa disebut dengan slicing), tugas ini cukup berat karena seorang Fron-End developer harus memastikan hasil slicing mereka sama persis dengan gambar(mockup) baik itu tampilan, animasi, dan lain-lain. Seorang Fron-End developer biasanya harus memahami beberapa bahasa programming yaitu HTML, CSS, Javascript dan Jquery. Setelah para Fron-end developer selesai maka mereka akan memeberikan hasil berbentuk Web Static yang kemudian akan dirubah menjadi Web Dinamis oleh Back-End Developer. Setelah menerima file web static maka Back-End developer akan segera merubah file tersebut menjadi Web Dinamis, tugas Back-End Developer biasanya adalah memastikan semua fungsi berjalan dengan baik dan benar dan para Back-end ini harus memamahi beberapa bahasa programming yaitu php, sql, java dan sebagainya.<br><br>Jika disimpulkan dan dipersingkat ini adalah perbedaan dari kedua developer tersebut:<br><br>Front-End Developer<br>Programmer yang lebih fokus pada tampilan luarnya (layout), jika kalian melihat web-web yang bagus layout/tampilanya itu biasanya dibuat oleh para front-end web developer untuk itu mereka harus bisa memahami beberapa bahasa programming diantaranya HTML, CSS, Javascript dan Jquery. <br><br>Back-End Developer <br>Programmer yang lebih fokus pada fungsi-fungsi dari website tersebut, misalnya membuat form registrasi, pembayaran dan lain sebagainya, karena itu mereka harus bisa memahami beberapa bahasa programming juga diantaranya php, sql, java dan lain sebagainya.<br><br>Begitulah informasi yang saya ketahui tentang Back end dan Front-end developer, buat yang sudah berpengalaman jika ada kata-kata saya yang salah mohon dimaafkan karena memang masih newbie dan hanya ingin berbagi pengalaman :D<br></p>', '03 Jan 2016 10:23 am', 'Back-end-Vs-Front-end-Developer'),
(60, 'Bahasa Pemrograman', 1, 33, 'foto/20.jpg', '<p align="justify">Bahasa pemrograman, atau sering diistilahkan juga dengan bahasa komputer\r\n atau bahasa pemrograman komputer, adalah instruksi standar untuk \r\nmemerintah komputer. Bahasa pemrograman ini merupakan suatu himpunan \r\ndari aturan sintaks dan semantik yang dipakai untuk mendefinisikan \r\nprogram komputer. Bahasa ini memungkinkan seorang programmer dapat \r\nmenentukan secara persis data mana yang akan diolah oleh komputer, \r\nbagaimana data ini akan disimpan/diteruskan, dan jenis langkah apa \r\nsecara persis yang akan diambil dalam berbagai situasi.<br><br>Menurut tingkat kedekatannya dengan mesin komputer, bahasa pemrograman terdiri dari:<br>1. Bahasa Mesin, yaitu memberikan perintah kepada komputer dengan memakai kode bahasa biner, contohnya 01100101100110<br>2.\r\n Bahasa Tingkat Rendah, atau dikenal dengan istilah bahasa rakitan \r\n(bah.Inggris Assembly), yaitu memberikan perintah kepada komputer dengan\r\n memakai kode-kode singkat (kode mnemonic).<br>3. Bahasa Tingkat \r\nMenengah, yaitu bahasa komputer yang memakai campuran instruksi dalam \r\nkata-kata bahasa manusia (lihat contoh Bahasa Tingkat Tinggi di bawah) \r\ndan instruksi yang bersifat simbolik.<br>4. Bahasa Tingkat Tinggi, yaitu\r\n bahasa komputer yang memakai instruksi berasal dari unsur kata-kata \r\nbahasa manusia, contohnya begin, end, if, for, while, and, or, dsb. \r\nKomputer dapat mengerti bahasa manusia itu diperlukan program compiler \r\natau interpreter.<br><br>Sebagian besar bahasa pemrograman digolongkan \r\nsebagai Bahasa Tingkat Tinggi, hanya bahasa C yang digolongkan sebagai \r\nBahasa Tingkat Menengah dan Assembly yang merupakan Bahasa Tingkat \r\nRendah.<br></p>', '03 Jan 2016 10:54 am', 'Bahasa-Pemrograman'),
(68, 'Bahasa Pemrograman Terpopuler', 1, 33, 'foto/12.jpg', '<p align="justify">Bahasa pemrograman merupakan untaian kata-kata berupa \r\ninstruksi/perintah-perintah yang biasanya terdiri dari banyak baris yang\r\n bisa dimengerti oleh komputer. Bahasa pemrograman ini wajib dikuasai \r\noleh seorang developer agar dapat membangun sebuah aplikasi/software. \r\nDan untuk membuat aplikasi tertentu maka digunakan juga bahasa \r\npemrograman yang sesuai dengan kebutuhan aplikasi yang akan dibuat \r\ntersebut.<span id="more-2673"></span></p><p align="justify"><a href="http://www.codepolitan.com/wp-content/uploads/2014/12/Tak-berjudul4.png"></a></p><p align="justify"><br></p><p align="justify">Jumlah\r\n bahasa pemrograman ini sangat banyak. Dari sekian banyak bahasa \r\npemrograman yang ada saat ini, tentu saja developer tidak menggunakan \r\nseluruh bahasa pemrograman yang ada. Mereka hanya menggunakan 1 atau 2 \r\nbahasa pemrograman dalam melakukan developing software.</p><p align="justify"><br></p><p align="justify">Menurut \r\nTiobe, salah satu lembaga riset yang telah beberapa tahun berupaya \r\nmembuat peringkat bahasa pemrograman populer dunia yang diwujudkan dalam\r\n bentuk <a target="_blank" href="http://www.tiobe.com/index.php/content/paperinfo/tpci/">TIOBE Programming Community Index</a> edisi bulan Desember&nbsp;2014, Java dan C masih menjadi bahasa pemrograman terpopuler urutan pertama dan kedua.</p><p align="justify"><br></p><div class="wp-caption aligncenter" id="attachment_2706" align="justify"><a href="http://www.codepolitan.com/wp-content/uploads/2014/12/tiobe.png"></a><p class="wp-caption-text">Bahasa Pemrograman yang Paling Banyak Dipakai Menurut Hasil Survey TIOBE</p></div><p align="justify"><br></p><p align="justify">Kemudian dalam&nbsp;<a target="_blank" href="https://sites.google.com/site/pydatalog/pypl/PyPL-PopularitY-of-Programming-Language">PYPL Popularity of Programming Language</a>\r\n juga merilis 11 bahasa pemrograman yang banyak dipakai sampai pada \r\nbulan November 2014, menunjukan Java dan PHP berada di posisi pertama \r\ndan kedua sementara C menempati urutan ke 6.</p><p align="justify"><br></p><div class="wp-caption aligncenter" id="attachment_2707" align="justify"><a href="http://www.codepolitan.com/wp-content/uploads/2014/12/pypl.png"></a><p class="wp-caption-text">Hasil Survey dari PYPL</p></div><p align="justify"><br></p><p align="justify">Data\r\n di atas merupakan bahasa pemrograman yang populer digunakan di dunia, \r\ndi artikel kali ini&nbsp;CodePolitan&nbsp;akan rangkum 10 bahasa pemrograman yang \r\npopuler digunakan di indonesia. Selain menggunakan data dari TIOBE dan \r\nPYPL, CodePolitan merangkum bahasa pemrograman populer berdasarkan \r\njumlah member grup Facebook yang membahas tentang pemrograman. Berikut \r\nadalah ulasan 10 bahasa pemrograman populer di Indonesia:</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">1. JAVA</span></h2><div class="wp-caption aligncenter" id="attachment_2680" align="justify"><a href="http://www.codepolitan.com/wp-content/uploads/2014/12/java_logo.jpg"></a><p class="wp-caption-text">Logo Java</p></div><p align="justify"><br></p><p align="justify">Java\r\n merupakan bahasa pemrograman yang dapat dijalankan di berbagai \r\nplatform, dari mulai PC sampai perangkat mobile. Bahasa pemrograman ini \r\nawalnya dikembangkan pada The Green Project pada tahun 1991 oleh Sun \r\nMicrosystem yang kemudian dilepas pada Oracle. Nama Java sendiri dipilih\r\n karena salah seorang pendiri Java, James Gosling, sangat menyukai kopi \r\nmurni yang langsung digiling dari mesin giling (kopi tubruk) dimana kopi\r\n jenis ini berasal dari pulau Jawa di Indonesia.</p><p align="justify"><br></p><p align="justify">Java menjadi \r\nsalah satu bahasa pemrograman terpopuler bukan karena tanpa alasan, \r\nbahasa pemrograman ini memiliki beberapa kelebihan seperti misalnya bisa\r\n berjalan di sistem operasi yang berbeda-beda, kemudian bahasa \r\npemrograman ini termasuk kedalam pemrograman OOP (pemrograman orientasi \r\nobjek) sehingga programer lebih mudah dalam menyusun program menggunakan\r\n bahasa ini, selain itu bahasa ini juga memiliki library yang lengkap \r\nsehingga akan sangat memudahkan programer. Dan saat ini merupakan era \r\ndimana smartphone Android sangat banyak digunakan. Aplikasi dalam \r\nsmartphone Android dibangun menggunakan bahasa Java, sehingga banyak \r\njuga programer-programer yang menggunakan bahasa ini karena memang \r\nsedang banyak dibutuhkan.</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">2. C</span></h2><div class="wp-caption aligncenter" align="justify"><p class="wp-caption-text">Bahasa C</p></div><p align="justify"><br></p><p align="justify">Bahasa\r\n C ini termasuk bahasa pemrograman tertua yang pernah ada. Bahasa \r\npemrograman C ini dikembangkan dari sekitar tahun 70-an. Bahasa C \r\nmenjadi bahasa pemrograman yang populer di Indonesia karena hampir \r\nsebagian besar perguruan tinggi jurusan IT ataupun lembaga kursus \r\npemrograman menggunakan bahasa ini untuk dipelajari pertama kali sebelum\r\n mempelajari bahasa pemrograman yang lain. Bukan tanpa sebab bahasa C \r\nini menjadi dasar untuk mempelajari bahasa pemrograman yang lain, karena\r\n memang bahasa C ini merupakan â€œbapakâ€ dari bahasa pemrograman lain \r\nseperi C#, Java, C++, dan lain sebagainya.</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">3. PHP</span></h2><div class="wp-caption aligncenter" id="attachment_2694" align="justify"><a href="http://www.codepolitan.com/wp-content/uploads/2014/12/PHP.png"></a><p class="wp-caption-text">Logo PHP</p></div><p align="justify"><br></p><p align="justify">PHP\r\n (PHP Hypertext Pre-processor) merupakan bahasa pemrograman yang paling \r\nbanyak digunakan di Indonesia. Selain karena gratis, PHP banyak \r\ndigunakan karena bahasa pemrograman ini merupakan server side scripting \r\nyang memang dirancang untuk membangun website dinamis. Selain itu banyak\r\n website-website ternama seperti Facebook, WordPress, ataupun Digg yang \r\nmenggunakan PHP dalam pengembangannya.</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">4. VisualBasic</span></h2><div class="wp-caption aligncenter" align="justify"><p class="wp-caption-text">Logo Visual Basic</p></div><p align="justify"><br></p><p align="justify">VisualBasic\r\n merupakan bahasa pemrograman yang dikembangkan oleh Microsoft. Bahasa \r\npemrograman ini menawarkan IDE visual dalam pembuatan software, dan \r\nbahasa pemrograman ini dikembangkan untuk membuat software-software \r\nberbasis sistem operasi Windows. VisualBasic sendiri adalah keturunan \r\ndari bahasa pemrograman BASIC.</p><p align="justify"><br></p><p align="justify">Sebuah survey pada tahun 2005 \r\nmenunjukan 62% developer software menggunakan VisualBasic dalam \r\npengembangan software nya, sehingga hal tersebut menjadikan VisualBasic \r\nsebagai salah satu bahasa pemrograman yang populer. Di Indonesia sendiri\r\n terdapat grup <a target="_blank" href="https://www.facebook.com/groups/VisualBasicIND">Visual Basic Indonesia</a> yang telah memiliki 22 ribu member lebih.</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">5. Python</span></h2><div class="wp-caption aligncenter" id="attachment_2696" align="justify"><a href="http://www.codepolitan.com/wp-content/uploads/2014/12/python-logo-master-v3-TM.png"></a><p class="wp-caption-text">Logo Python</p></div><p align="justify"><br></p><p align="justify">Dalam\r\n tingkatan bahasa pemrograman, Python termasuk bahasa tingkat tinggi. \r\nPython menjadi salah satu bahasa pemrograman yang dapat membangun \r\naplikasi, baik itu berbasis web ataupun berbasis mobile. Bahasa phyton \r\nini termasuk kedalam bahasa pemorgraman yang cukup mudah bagi pemula, \r\nkarena bahasa tersebut mudah untuk dibaca dengan syntax yang mudah untuk\r\n dipahami juga. Banyak perusahaan besar menggunanakn Phyton dalam \r\npengembanganya seperti Instagram, Pinterest dan Rdio. Python juga \r\ndigunakan oleh para pengembang Google, Yahoo!, dan juga NASA.</p><p align="justify"><br></p><p align="justify">Di \r\nIndonesia sendiri terdapat grup Facebook yang membahas tentang Python \r\nyang telah memiliki lebih dari 6000 anggota. Grup ini cukup aktif, grup \r\nini bernama <a target="_blank" href="https://www.facebook.com/groups/IndonesianPython/">Python Indonesia</a>.</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">6. C++</span></h2><div class="wp-caption aligncenter" align="justify"><p class="wp-caption-text">C++</p></div><p align="justify"><br></p><p align="justify">C++\r\n merupakan bahasa pemrograman pengembangan dari bahasa C. C++ dan C \r\nmemiliki sintaks penulisan yang hampir sama, meski begitu kedua bahasa \r\npemrograman ini memiliki perbedaan pada penyelesaian masalahnya. Pada \r\nbahasa C penyelesaian masalah dilakukan dengan membagi-bagi kedalam \r\nsub-sub masalah yang lebih kecil lagi atau bisa disebut bahasa \r\npemrograman prosedural, sedangakan C++ berorientasi pada objek dimana \r\npermasalahan dibagi-bagi kedalam class-class.</p><p align="justify"><br></p><p align="justify">C++ ini menjadi \r\nbahasa pemrograman yang populer karena banyak juga perusahaan-perusahaan\r\n software besar yang menggunakan bahasa ini untuk membangun software nya\r\n seperti Adobe, Firefox, ataupun Winamp yang sekarang pengembanganya di \r\nhentikan.</p><p align="justify"><br></p><h2 align="justify"><span style="font-size: 18px;">7. JavaScript</span></h2><div class="wp-caption aligncenter" align="justify"><p class="wp-caption-text">JavaScript</p></div><p align="justify"><br></p><p align="justify">JavaScript\r\n adalah bahasa pemrograma yang dikembangkan oleh Netscape. Penggunaan \r\nJavaScript saat ini kebanyakan terdapat pada pengembangan web. Dengan \r\nJavaScript ini kita bisa membuat web yang interaktif dan menarik. Di \r\nIndonesia sendiri terdapat grup Facebook yang membahas tentang \r\nJavaScript ini dengan nama <a target="_blank" href="https://www.facebook.com/groups/sencha.indo.admin/">JavaScript Indonesia</a>. Grup yang beranggotakan lebih dari 10 ribu orang ini masih aktif sampai sekarang.</p>', '03 Jan 2016 11:13 am', 'Bahasa-Pemrograman-Terpopuler'),
(69, 'Netbeans', 1, 32, 'foto/14.jpg', '<p align="justify">NetBeans IDE (Integrated Development Environment) adalah sebuah lingkungan pengembangan terintegrasi yang tersedia untuk Windows, Mac, Linux, dan Solaris. Proyek NetBeans terdiri dari open-source IDE dan platform aplikasi, yang memungkinkan pengembang untuk secara cepat membuat web, enterprise, desktop, dan aplikasi mobile menggunakan platform Java, serta JavaFX, PHP, JavaScript dan Ajax, Ruby dan Ruby on Rails, Groovy dan Grails, dan C/C++. Proyek NetBeans didukung oleh komunitas pengembang yang ekstensif dan menawarkan dokumentasi dan sumberdaya pelatihan serta beragam pilihan plugin dari pihak ketiga. Pada pembahasan ini digunakan NetBeans versi 7.2. NetBeans IDE 7.2 memberikan peningkatan kinerja dan pengalaman pengkodean secara signifikan, dengan kemampuan baru analisis kode statis di Editor Java dan pemindaian proyek lebih cerdas. Rilis ini juga mencakup fitur penting seperti integrasi dengan pembangun tema untuk menciptakan bentuk-bentuk visual JavaFX, dukungan untuk banyak kerangka kerja PHP; diperbarui pada dukungan Groovy, dan perangkat lain di Java EE, Maven, C/C++ dan NetBeans Platform.<br>NetBeans 7.2 tersedia dalam bahasa Inggris, Brasil, Portugis, Jepang, Rusia dan Cina sederhana.</p>', '03 Jan 2016 11:18 am', 'Netbeans');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ebook`
--

CREATE TABLE IF NOT EXISTS `tb_ebook` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(35) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(30) NOT NULL,
  `file` varchar(40) NOT NULL,
  `tanggal` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ebook`
--

INSERT INTO `tb_ebook` (`id_file`, `nama_file`, `tipe_file`, `ukuran_file`, `file`, `tanggal`) VALUES
(39, 'PHP Mysql', 'pdf', '1587026', 'files/PHP Mysql.pdf', '22 Jan 2016 13:41'),
(40, 'HTML', 'docx', '40836', 'files/Spesial Karakter HTML.docx', '22 Jan 2016 13:42'),
(41, 'PHP 5', 'pdf', '6330652', 'files/PHP 5 For Dummies.pdf', '22 Jan 2016 13:42'),
(42, 'Bootstrap', 'zip', '230668', 'files/Bootstrap.zip', '22 Jan 2016 13:43'),
(43, 'Tutorial Mysql', 'pdf', '2943235', 'files/Tutorial Mysql.pdf', '22 Jan 2016 13:44'),
(45, 'Web Perpus', 'rar', '1350250', 'files/Web Perpus.rar', '22 Jan 2016 13:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `slug_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'HTML', 'HTML'),
(2, 'Jquery', 'Jquery'),
(3, 'Android', 'Android'),
(4, 'AJAX', 'AJAX'),
(27, 'PHP', 'PHP'),
(32, 'Text Editor', 'Text-Editor'),
(33, 'Pemrograman', 'Pemrograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Muhammad Firman', 'admin', 'admin1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`), ADD UNIQUE KEY `judul` (`judul`);

--
-- Indexes for table `tb_ebook`
--
ALTER TABLE `tb_ebook`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tb_ebook`
--
ALTER TABLE `tb_ebook`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
