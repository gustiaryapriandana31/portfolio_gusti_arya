<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio Web | M. Gusti Arya Priandana </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
        <nav id="nav">
            <div class="logo">
                <a href="/"><img src="img/LOGO.png" alt="Logo Ary"></a>
            </div>
            <ul>
                <a href="/about"><li>About</li></a>
                <a href="#education"><li>Edu</li></a>
                <a href="/skills"><li>Skills</li></a>
                <a href="/projects"><li>Projects</li></a>
                <a href="/contact"><li>Contact</li></a>
            </ul>
        </nav>

        <div class="container-fluid" id="about">
           <div class="alert alert-primary position-absolute" role="alert">
                Hai,ini kunjungan kamu yang ke-<span id="visit-count">0</span> kali di page ini.
            </div>
            <div class="row profile">
                <div class="col-lg-5 offset-lg-1 col-md-6 col-sm-12 offset-sm-1">
                    <div class="profile-banner">
                        <img src="img/Gusti_arya.png" alt="Foto Profil">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="profile-desc">
                        <h1 id="namaku">Gusti Arya Priandna</h1>
                        <p>Halo, nama saya adalah M. Gusti Arya Priandana. Saya adalah seorang mahasiswa S1 program studi Sistem Informasi di Universitas Sriwijaya. Saya tertarik untuk menjelajahi lebih lanjut dunia web programming saat ini. Fokus saya sekarang adalah belajar untuk menguasai sisi Front End dan Back End Programming.
                        </p>
                        <p>Sejauh ini baru beberapa projek kecil yang saya buat selama proses belajar saya 1 tahun ke belakang. Harapan saya semoga ke depannya bisa membuat real projek yang bisa digunakan untuk memenuhi kebutuhan saya.
                        </p>
                        <p>
                            Berikut teknologi yang pernah saya pelajari :
                        </p>
                        <div class="row">
                            <div class="col-sm-6 text-white">
                                <ul>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> HTML</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> CSS</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> Bootstrap</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> JavaScript</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 text-white float-end">
                                <ul>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> PHP</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> MySQL</li>
                                    <li><i class="fas fa-arrow-alt-circle-right"></i> Laravel</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="education">
            <h1>Education History</h1>
            <hr>
            <div class="content d-flex justify-content-between">   
                <div class="row map">
                    <div class="sd">
                        <a href="#sdku"><i class="fa fa-map-marker-alt pin-sd"></i></a>
                    </div>
                    <div class="smp">
                        <a href="#smpku"><i class="fa fa-map-marker-alt pin-smp"></i></a>
                    </div>
                    <div class="sma">
                        <a href="#smaku"><i class="fa fa-map-marker-alt pin-sma"></i></a>
                    </div> 
                    <div class="kuliah">
                        <a href="#kuliahku"><i class="fa fa-map-marker-alt pin-kuliah"></i></a>
                    </div> 
                </div>
                <div class="education">
                    <div class="row sekolah" id="sdku">
                        <div class="col-sm-6 col-md-6">
                            <img src="img/sd.png" alt="Sekolah Dasar">
                            <h2>SD NEGERI 3 PRATAMA MANDIRA</h2>
                            <h6>PT. Wahyuni Mandira, Kecamatan Sungai Menang, Kabupaten Ogan Komering Ilir</h6>
                            <a href="https://goo.gl/maps/aANGQCv1HQHfUWpt5">Lihat di Peta</a>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.859114669099!2d105.7606743!3d-4.049149400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3ef70f24a04aeb%3A0xc1b76b3646b0189!2sSDN%203%20Pratama%20Mandira!5e0!3m2!1sid!2sid!4v1682503276462!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>        
                    <div class="row sekolah" id="smpku">
                        <div class="col-sm-6 col-md-6">
                            <img src="img/smp.jpg" alt="Sekolah Menengah Pertama">
                            <h2>SMP NEGERI 1 INDRALAYA SELATAN</h2>
                            <h6>Desa Meranjat I, Kecamatan Indralaya Selatan, Kabupaten Ogan Ilir</h6>
                            <a href="https://goo.gl/maps/aANGQCv1HQHfUWpt5">Lihat di Peta</a>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127468.4175783763!2d104.55081988617391!3d-3.253374471356432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b95fbb7ac56f1%3A0x14eebfc6b171e829!2sSMP%20Negeri%201%20Indralaya!5e0!3m2!1sid!2sid!4v1682589178177!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>        
                    <div class="row sekolah" id="smaku">
                        <div class="col-sm-6 col-md-6">
                            <img src="img/sma.jpg" alt="Sekolah Menengah Atas">
                            <h2>SMA NEGERI 1 INDRALAYA</h2>
                            <h6>Jalan Lintas Timur Km.35, Kecamatan Indralaya Mulya, Kabupaten Ogan Ilir</h6>
                            <a href="https://goo.gl/maps/aANGQCv1HQHfUWpt5">Lihat di Peta</a>
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63734.781368037744!2d104.5964205265045!3d-3.2443064647340174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b95f1f21039a3%3A0xe765e19f222a68e4!2sSMA%20Negeri%201%20Indralaya!5e0!3m2!1sid!2sid!4v1682589227243!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>        
                    <div class="row sekolah" id="kuliahku">
                        <div class="col-sm-6 col-md-6">
                            <img src="img/kuliah.png" alt="Universitas Sriwijaya">
                            <h2>UNIVERSITAS SRIWIJAYA</h2>
                            <h6>JL. Raya Palembang - Prabumulih, Kelurahan Timbangan Indralaya, Kabupaten Ogan Ilir</h6>
                            <a href="https://goo.gl/maps/aANGQCv1HQHfUWpt5">Lihat di Peta</a>        
                        </div>
                        <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.1183146443!2d104.63074845541992!3d-3.217362599999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bbdf41ccc272f%3A0x44c587e8be864639!2sUniversitas%20Sriwijaya%20-%20Kampus%20Indralaya!5e0!3m2!1sid!2sid!4v1682589268020!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>        
                </div>
            </div>
        </div>

        <div class="container-fluid" id="contact">
            <h1>Connect with me...</h1>
            <p>How do you type your code?</p>
            <div class="contact-link">
                <a href="https://instagram.com/gusarya31" target="_blank" class="contact-details">
                    <i class="fab fa-instagram"></i>
                    Instagram
                </a>
                <a href="https://github.com/gustiaryapriandana31" target="_blank" class="contact-details">
                    <i class="fab fa-github"></i>
                    GitHub
                </a>
                <a href="https://twitter.com/guardana31" target="_blank" class="contact-details">
                    <i class="fab fa-twitter"></i>
                    Twitter
                </a>
                <a href="mailto:gustiaryapriandana@gmail.com" target="_blank" class="contact-details">
                    <i class="fas fa-at"></i>
                    Send a mail
                </a>
                <a href="tel:0822-8196-3857" target="_blank" class="contact-details">
                    <i class="fas fa-mobile-alt"></i>
                    Call me
                </a>
            </div>
            <hr class="footer">
            <footer id="footer">
                <p>**This is just a portfolio. All the projects and contact details given are not real yet.</p>
                <p>
                    © Created with <a href="https://freecodecamp.com" id="profile-link" target="_blank">Bootstrap and Laravel <i class="fab fa-laravel">

                        </i>
                    </a>
                </p>
                    
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <script src="js/typeit.js"></script>
        <script src="js/setcookie.js"></script>
        <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
        <!-- <script>
          // Halaman Home
          const pin = document.querySelector('.map');
          child.addEventListener('mouseenter', function() {
            // const edu = document.getElementById('greeting');
            // const parent = this.parentNode;
            // const parent = document.querySelector('.welcome');
            pin.style.backgroundImage = "url('img/roadmap.jpeg')";
            // parent.style.backgroundColor = "green";
           
          });
        </script> -->
    </body>
    
</html>




