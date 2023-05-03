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
                <h1><a href="/">G</a></h1>
            </div>
            <ul>
               <a href="/about"><li>About</li></a>
                <a href="/about"><li>Edu</li></a>
                <a href="/skills"><li>Skills</li></a>
                <a href="/projects"><li>Projects</li></a>
                <a href="/contact"><li>Contact</li></a>
            </ul>
        </nav>
        <div class="container-fluid" id="message">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h1>Message Me</h1>
            <hr>
            <form action="/contact" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4 offset-md-2 left-message">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus value={{old("email")}}>
                          @error('email')
                            <div class="invalid-feedback">
                              {{ $message }}.
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan nama" value={{old("nama")}}>
                          @error('nama')
                            <div class="invalid-feedback">
                              {{ $message }}.
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nohp" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" id="nohp" value={{old("nohp")}}>
                          @error('nohp')
                            <div class="invalid-feedback">
                              {{ $message }}.
                            </div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-info">Kirim</button>
                    </div>
                    <div class="col-md-4 right-message">
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="pesan" rows="15"></textarea>
                            @error('pesan')
                              <div class="invalid-feedback">
                                {{ $message }}.
                              </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
            <img src="img/message.gif" alt="Message Animate" class="animate1">
            <img src="img/message_two.gif" alt="Message Animate" class="animate2">
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
    </body>
    
</html>




