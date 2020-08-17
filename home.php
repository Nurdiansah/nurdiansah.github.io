<?php
function batasKata($kalimat)
{
  $kalimat = $kalimat;
  $huruf_maksimal = 200;

  $result = substr($kalimat, 0, $huruf_maksimal);
  echo $result; // hasil ini k 
}
?>
<!-- Main content -->
<!-- <section class="content">       -->
<!-- Masthead-->
<header class="masthead ">
  <div class="container">
    <div class="masthead-subheading">Welcome To PRIMA JAYA CANOPY !</div>
    <div class="masthead-heading text-uppercase text-warning">
      JasA Canopy Terbaik di JABODETABEK
    </div>
    <a class="btn btn-danger btn-xl text-uppercase js-scroll-trigger" href="https://wa.me/6282111351872">HUBUNGI KAMI <i class="fab fa-whatsapp"></i></a>
  </div>
</header>
<!-- </section> -->
<!-- Body -->
<div class="page-section">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Canopy Baja Ringan Murah & Berkualitas</h2>
      <p>Apakah saat ini anda sedang mencari jasa pemasangan Kanopi atau baja ringan ? Dengan layanan terbaik dan yang mengutamakan kualitas material, Mengedepankan Nilai Estetika, Memperhatikan kekuatan Kanopi Serta di dukung pelayanan yang amat sangat Ramah, Layanan Cepat Tanggap dan Harga Terjangkau</p>
      <h2 class="section-heading text-uppercase text-danger">PRIMA JAYA CANOPY SOLUSI TERBAIK UNTUK ANDA</h2>
      <p>Pasang kanopi baja ringan murah dan canopy berkualitas, hasil canopy baja ringan bagus. Prima Jaya Canopy memasang canopy berkualitas., pastikan Anda mempercayakan rumah ditangan yang berpengalaman dan ahli dibidangnya. Prima Jaya Canopy hadir untuk memperindah dan mempercantik Teras rumah anda.</p>
      <p class="mt-5">Prima Jaya Canopy hadir di kawasan JABODETABEK untuk menjadi JAWABAN & memberikan SOLUSI bagi ANDA yang sedang membutuhkan atau mencari jasa pemasangan canopy baja ringan BERKUALITAS. Kami melayani pesanan di seluruh wilayah JAKARTA, BOGOR, DEPOK,TANGERANG, dan BEKASI. Hubungi kami sekarang juga dan dapatkan konsultasi GRATIS! :</p>
      <a href="tel:081299245776"><img src="assets/img/icon-telpon.png" alt=""></a>
      <a href="https://wa.me/6282111351872"><img src="assets/img/icon-wa.png" alt="" srcset=""></a>
    </div>
  </div>
  <!-- Slide Show -->
  <section class="page-section bg-light" id="portfolio">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Project</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/canopy01.png" alt="" />
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/canopy14.jpeg" alt="" />
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="assets/img/portfolio/canopy17.png" alt="" />
          </a>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a class="btn btn-danger btn-l text-right js-scroll-trigger" href="index.php?p=portfolio">Lihat Lainnya</a>
    </div>
  </section>

  <!-- Jenis Atap -->
  <section class="page-section ">
    <div class="text-center mb-5">
      <h2 class="section-heading text-uppercase">Daftar Harga</h2>
    </div>
    <div class="ml-5 mr-5">
      <h3>PILIHAN PAKET RANGKA BAJA RINGAN :</h3>
      <p><b>√</b> PAKET SINGLE: Tiang Single, dan rangka single.</p>
      <p>√ PAKET STANDART: Tiang Double, Rangka Single.</p>
      <p>√ PAKET DOUBLE: Tiang Double, Rangka Double</p>
      <div class="row mb-3">
        <div class="card-deck">
          <div class="card ">
            <img src="assets/img/jenis-atap/gogreen.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Canopy Atap GoGreen</h5>
              <p class="card-text"><?= batasKata('ATAP GOGREEN TERSEDIA DALAM 3 PILIHAN WARNA
                YAITU :MERAH, HIJAU,ABU-ABU
                Formula Plastik Baja berbahan dasar plastik ini dikombinasikan dengan bahan-bahan kimia baru dan struktur inovatif yang telah dipatenkan, menghasilkan plastik superior yang berkekuatan tinggi dengan tingkat kelenturan dan ketahanan prima. Hal ini membuat atap GoGreen menjadi pilihan yang baik untuk disandingkan dengan rangka canopy/kanopi  baja ringan.'); ?> ....
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalGogreen">Baca lebih lanjut</button>
              </p>
            </div>
            <div class="card-footer text-right">
              <small class="text-muted">Mulai Dari :</small> <b class="text-danger">Rp.170.000/M<sup>2</sup></b>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/jenis-atap/polycarbonate.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Canopy Atap Polycarbonate</h5>
              <p class="card-text"><?= batasKata('Pada bangunan, polycarbonate mulai dipakai di Indonesia sejak awal tahun 90-an yaitu sebagai material penutup atap yang membutuhkan penerangan cahaya alami dari sinar matahari. Karena itu, sudah menjadi standar bagi setiap produsen material atap polycarbonate untuk menambahkan lapisan anti UV pada satu atau kedua sisi lembaran Polycarbonate. Jadinya, bahan ini sangat aman bagi kesehatan, hal tersebut membuat bahan ini menjadi populer digunakan dan direkomendasikan oleh banyak jasa pasang canopy.') ?>....
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalPolycarbonate">Baca lebih lanjut</button>
              </p>
            </div>
            <div class="card-footer text-right">
              <small class="text-muted">Mulai Dari :</small> <b class="text-danger">Rp.260.000/M<sup>2</sup></b>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/jenis-atap/solartuff.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Canopy Atap Solartuff</h5>
              <p class="card-text"><?= batasKata('Atap Solartuff adalah lembaran Polycarbonate bergelombang,dengan desain yang elegan, sangat kuat dan liat, serta bening seperti kaca. Solusi atap yang sempurna untuk memenuhi berbagai kebutuhan arsitektural anda dan sering direkomendasikan oleh perusahaan jasa pasang canopy.'); ?>....
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalSolartuff">Baca lebih lanjut</button>
              </p>
            </div>
            <div class="card-footer text-right">
              <small class="text-muted">Mulai Dari :</small> <b class="text-danger">Rp.385.000/M<sup>2</sup></b>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="card-deck">
          <div class="card ">
            <img src="assets/img/jenis-atap/spandek.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Canopy Atap Spandek</h5>
              <p class="card-text"><?= batasKata('Atap Spandek dirancang sebagai bahan penutup atap dan dinding yang kuat, dengan bentuk gelombang yang kontemporer untuk bangunan perumahan, industri, dan komersial. Kami sebagai jasa pasang canopy baja ringan terpercaya menyediakan bahan atap spandek ini karena kualitasnya sangat baik. Atap berbentuk gelombang ini berbahan plat zincalume G550 dengan ketebalan 0.25mm sampai dengan 0.5mm. Atap Spandek ini sangat cocok digunakan sebagai atap canopy/kanopi dengan rangka baja ringan untuk rumah dan bangunan lain. '); ?>.....
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalSpandek">Baca lebih lanjut</button>
              </p>
            </div>
            <div class="card-footer text-right">
              <small class="text-muted">Mulai Dari :</small> <b class="text-danger">Rp.245.000/M<sup>2</sup></b>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/jenis-atap/alderon.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Paket Canopy Atap Alderon</h5>
              <p class="card-text"><?= batasKata('Spesifikasi Produk Atap Alderon / PVC Rooftop Sangat Kuat. Tidak Akan Pecah Meski Diinjak. Tahan Terhadap Asam Dan Garam. Tolak Panas – Anti Uv. Rongga Udara Twin Wall Semakin Mengurangi Panas.'); ?>.....
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAlderon">Baca lebih lanjut</button>
              </p>
            </div>
            <div class="card-footer text-right">
              <small class="text-muted">Mulai Dari :</small> <b class="text-danger">Rp.400.000/M<sup>2</sup></b>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/jenis-atap/hollow.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kanopi Minimalis Besi Hollow/Galvanis</h5>
              <p class="card-text"><?= batasKata('Hollow galvanis atau stall galvanis yang terbuat dari besi galvanis (baja ringan yang dilapis seng/zinc) ini memiliki ketahanan terhadap karat dan keropos. Seperti besi hollow hitam, hollow galvanis juga diproduksi dengan panjang standar 6 meter dengan ukuran penampang yang juga beragam. '); ?>.....
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalHollow">Baca lebih lanjut</button>
              </p>
            </div>
            <div class="card-footer text-right">
              <small class="text-muted">Mulai Dari :</small> <b class="text-danger">Rp.385.000/M<sup>2</sup></b>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- services -->
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Services</h2>
      <h3 class="section-subheading text-muted">
        Berikut jasa yang kami tawarkan :
      </h3>
    </div>
    <div class="row text-center mt-5 mb-5">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-store fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="my-3">Canopy</h4>
        <p class="text-muted">
          Kami mempunyai tenaga ahli dan profesional dan tentunya sudah berpengalaman dalam membuat kanopi dengan berbagai bahan, misalnya bahan rangka kanopi baja ringan (galvalum) yang dikenal kokoh, ringan dan anti karat dll.
        </p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-home fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="my-3">Renovasi Rumah</h4>
        <p class="text-muted">
          Kami sangat berpengalaman dalam proses merombak, memperbarui, meremajakan, memperbaiki, menyempurnakan struktur bentuk, atau memberi desain tambahan pada bangunan
        </p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-landmark fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="my-3">Plafon Rumah/Kantor</h4>
        <p class="text-muted">
          Kami Berpengalaman dalam Pemasangan Plafon/Partisi di : Rumah mewah/biasa,kantor,Ruko, kost ,Pabrik,Villa,Perumahan/cluster dll
        </p>
      </div>
    </div>
  </div>
  </section>

  <!-- Modal Gogreen -->
  <div class="modal fade" id="modalGogreen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Paket Canopy Atap GoGreen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="assets/img/jenis-atap/gogreen.jpeg" class="card-img-top" alt="...">
          <p class="text-justify">ATAP GOGREEN TERSEDIA DALAM 3 PILIHAN WARNA
            YAITU :MERAH, HIJAU,ABU-ABU
            Formula Plastik Baja berbahan dasar plastik ini dikombinasikan dengan bahan-bahan kimia baru dan struktur inovatif yang telah dipatenkan, menghasilkan plastik superior yang berkekuatan tinggi dengan tingkat kelenturan dan ketahanan prima. Hal ini membuat atap GoGreen menjadi pilihan yang baik untuk disandingkan dengan rangka canopy/kanopi  baja ringan.
            <br>
            Atap GoGreen, memberikan solusi terbaik untuk atap gelombang yang kokoh dan aman dengan beberapa unggulan seperti :
            <br>
            <ul>
              <li>Ringan & Lentur</li>
              <li>Ramah Lingkungan</li>
              <li>Aplikasi Mudah</li>
              <li>Anti Karat</li>
              <li>100% Perlindungan UV</li>
              <li>Kekuatan Superior</li>
              <li>Bebas Toxic</li>
              <li>Harga Ekonomis</li>
            </ul>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Polycarbonate -->
  <div class="modal fade" id="modalPolycarbonate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Paket Canopy Atap Paket Canopy Atap Polycarbonate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="assets/img/jenis-atap/polycarbonate.jpeg" class="card-img-top" alt="...">
          <p class="text-justify">Pada bangunan, polycarbonate mulai dipakai di Indonesia sejak awal tahun 90-an yaitu sebagai material penutup atap yang membutuhkan penerangan cahaya alami dari sinar matahari. Karena itu, sudah menjadi standar bagi setiap produsen material atap polycarbonate untuk menambahkan lapisan anti UV pada satu atau kedua sisi lembaran Polycarbonate. Jadinya, bahan ini sangat aman bagi kesehatan, hal tersebut membuat bahan ini menjadi populer digunakan dan direkomendasikan oleh banyak jasa pasang canopy.

            Atap Polycarbonate memiliki keunggulan sebagai berikut:
            <br>
            Atap bahan Polycarbone
            Ringan (85% lebih ringan dari kaca silika).
            Material transparan dengan berbagai pilihan efek warna.
            Tahan pecah hingga benturan keras (250x lebih kuat dari kaca silika dan 20x lebih kuat dari acrylic).
            Tahan air, cuaca outdoor dan perubahan suhu (-40o s/d 120o C).
            Tahan sinar UV dan bahan kimia.
            Sangat baik sebagai media untuk penyekat panas dan isolator arus listrik.
            Mudah dalam pengerjaan, pengangkutan dan penyimpanan (dapat digulung).
            Mudah dibuat bentuk lengkungan sesuai desain atap yang diinginkan.
            Mudah dibersihkan dengan air sabun biasa.
            Lambat terbakar, tidak menimbulkan kobaran api.
            Ramah lingkungan, dapat didaur ulang.
            <br><br>
            Pilihan atap bahan polycarbonate
            Bidang Aplikasi:

            <br> - Kanopi outdoor
            <br> - Garasi rumah tinggal
            <br> - Kolam renang
            <br> - Patio dan gazebo
            <br> - Stadion olahraga
            <br> - Konservatorium
            <br> - Shelter bus
            <br> - Jembatan penyeberangan
            <br> - Kendaraan rekreasi/golf
            <br> - Skylight untuk penerangan ruangan indoor
            <br> - Aula
            <br> - Gedung olahraga
            <br> - Gudang, dll
            <br> - Atap dan dinding rumah hijau (greenhouse)
            <br> - Jendela bangunan (glazing)
            <br> - Railing tangga dan balkon
            <br> - Partisi ruangan kantor
            <br> - Papan reklame, neon box, display pameran
            <br><br>
            Kelebihan dari polycarbonate adalah :
            <br>1. Dapat meredam radiasi matahari
            <br>2. Dicetak dalam bentuk lembaran,sehingga mudah bila dipakai di luasan yang besar.
            <br>3. Cepat dalam pemasangan
            <br>4. Mudah di dapat di pasaran
            <br>5. Kedap air
            <br>6. Bebas rayap.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Solartuff -->
  <div class="modal fade" id="modalSolartuff" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Paket Canopy Atap Solartuff</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="assets/img/jenis-atap/solartuff.jpeg" class="card-img-top" alt="...">
          <p class="text-justify">Atap Solartuff adalah lembaran Polycarbonate bergelombang,dengan desain yang elegan, sangat kuat dan liat, serta bening seperti kaca. Solusi atap yang sempurna untuk memenuhi berbagai kebutuhan arsitektural anda dan sering direkomendasikan oleh perusahaan jasa pasang canopy.
            <br>
            Dengan memadukan teknologi termutakhir dari Eropa dan bahan baku yang terbaik, menciptakan Solartuff yang begitu ringan, sangat kuat dan tidak mudah pecah, serta tahan terhadap kondisi cuaca yang buruk dan perubahan iklim yang tidak menentu.
            <br><br>

            Spesifikasi Atap Solar Tuff
            KEUNGGULAN ATAP SOLARTUFF :
            <ol>
              <li>250 kali lebih kuat dari kaca dan 20 kali lebih kuat dari acrylic.</li>
              <li>Meredam panas tanpa mengurangi cahaya cahaya yang masuk</li>
              <li>Penerangan alami, penghematan listrik dan energy</li>
              <li>Ramah lingkungan.</li>
              <li>Tembus pandang dan bening seperti kaca.</li>
              <li>Mudah pemasangan dan fabrikasi.</li>
              <li>Tidak mudah terbakar</li>
              <li>Tahan terhadap perubahan suhu dari-20˚C Sampai 120˚.</li>
            </ol>

            <br><br>
            PENGAPLIKASIAN ATAP SOLARTUFF :
            Solartuff dilengkapi dengan lapisan pelindung ultra violet, cocok untuk diaplikasikan sebagai:
            <ul>
              <li>Rumah kaca</li>
              <li>Kolam renang</li>
              <li>Gazebo</li>
              <li>Canopy</li>
              <li>Garasi</li>
              <li>Cladding</li>
              <li>Atap Teras</li>
              <li>Pergolas</li>
              <li>Atap Transparan</li>
              <li>Bangunan Industrial</li>
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Spandek -->
  <div class="modal fade" id="modalSpandek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Paket Canopy Atap Spandek</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="assets/img/jenis-atap/spandek.jpeg" class="card-img-top" alt="...">
          <p class="text-justify">Atap Spandek dirancang sebagai bahan penutup atap dan dinding yang kuat, dengan bentuk gelombang yang kontemporer untuk bangunan perumahan, industri, dan komersial. Kami sebagai jasa pasang canopy baja ringan terpercaya menyediakan bahan atap spandek ini karena kualitasnya sangat baik. Atap berbentuk gelombang ini berbahan plat zincalume G550 dengan ketebalan 0.25mm sampai dengan 0.5mm. Atap Spandek ini sangat cocok digunakan sebagai atap canopy/kanopi dengan rangka baja ringan untuk rumah dan bangunan lain. Atap Spandek merupakan salah satu jenis atap bangunan yang sangat diminati oleh masyarakat saat ini termasuk di Indonesia.
            <br>
            Bahan Atap Spandek
            Atap zincalume merupakan atap yang terdiri dari tiga komposisi yaitu alumunium, zinc dan silicon. Kelebihan dari atap Zincalume adalah tahan api, ringan, tahan gempa, kuat dan tahan lama, tahan karat / tahan korosi, anti rayap, ramah lingkungan, tahan gempa, tahan terhadap angin kencang, dan masih banyak lagi kelebihan dari penggunaan atap zincalume yang membuat atap jenis ini menjadi favorit masyarakat, termasuk juga pelanggan
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Alderon -->
  <div class="modal fade" id="modalAlderon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Paket Canopy Atap Alderon</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="assets/img/jenis-atap/alderon.jpeg" class="card-img-top" alt="...">
          <p class="text-justify"> Spesifikasi Produk Atap Alderon / PVC Rooftop
            <ul>
              <li>Sangat Kuat. Tidak Akan Pecah Meski Diinjak. </li>
              <li>Tahan Terhadap Asam Dan Garam.</li>
              <li>Tolak Panas – Anti Uv. Rongga Udara Twin Wall Semakin Mengurangi Panas.</li>
              <li>Kedap Suara. </li>
              <li>Tidak Berisik Saat Hujan.</li>
              <li>Memiliki Interlock System.</li>
            </ul>
            Keunikan dan Keunggulan Atap Alderon:
            <ol>
              <li>Mampu Memantulkan Panas Hingga 70%</li>
              <li>Mampu Meredam Suara Hingga 15 Db</li>
              <li>Anti Karat Dan Sangat Cocok Untuk Cuaca Tropis</li>
              <li>Tahan Lama Dan Lentur</li>
              <li>Tidak Memerlukan Perawatan Khusus, Sangat Efisien Dan Tepat</li>
              <li>Proses Instalasi Sangat Cepat Dan Mudah</li>
              <li>Tahan Terhadap Beban Dan Benturan Serta Bahan Kimia</li>
            </ol>
            cocok untuk diaplikasikan sebagai :
            <ul>
              <li>Atap Gudang Dan Pabrik</li>
              <li>Peternakan Dan Agrikultur</li>
              <li>Canopy</li>
              <li>Penghubung Jalan</li>
              <li>Garasi</li>
              <li>Teras , dll</li>
            </ul>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal hollow -->
  <div class="modal fade" id="modalHollow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kanopi Minimalis Besi Hollow/Galvanis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="assets/img/jenis-atap/hollow.jpg" class="card-img-top" alt="...">
          <p class="text-justify">Hollow galvanis atau stall galvanis yang terbuat dari besi galvanis (baja ringan yang dilapis seng/zinc) ini memiliki ketahanan terhadap karat dan keropos. Seperti besi hollow hitam, hollow galvanis juga diproduksi dengan panjang standar 6 meter dengan ukuran penampang yang juga beragam. Dari bahan baku dan proses pembuatannya, hollow galvanis relatif memiliki kualitas yang lebih baik dibandingkan besi hollow hitam. Jadi Anda tak perlu heran jika mendapati harga hollow galvanis relatif lebih tinggi daripada harga besi hollow hitam.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>