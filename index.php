<?php
require './koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="style.css" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #5000ca">
        <div class="container">
            <a class="navbar-brand" href="#home">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section id="home" class="jumbotron text-center text-white">
        <img src="img/baguss.jpeg" alt="Foto Profil" width="200" class="rounded-circle img-thumbnail">
        <h1><?php echo ucwords($data[0]['Nama']); ?></h1>
        <p class="lead"><?php echo ucwords($data[0]['Kampus']); ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L0,256L36.9,256L36.9,192L73.8,192L73.8,64L110.8,64L110.8,160L147.7,160L147.7,224L184.6,224L184.6,64L221.5,64L221.5,192L258.5,192L258.5,288L295.4,288L295.4,32L332.3,32L332.3,64L369.2,64L369.2,288L406.2,288L406.2,192L443.1,192L443.1,128L480,128L480,224L516.9,224L516.9,128L553.8,128L553.8,288L590.8,288L590.8,320L627.7,320L627.7,192L664.6,192L664.6,288L701.5,288L701.5,224L738.5,224L738.5,192L775.4,192L775.4,128L812.3,128L812.3,288L849.2,288L849.2,256L886.2,256L886.2,64L923.1,64L923.1,128L960,128L960,32L996.9,32L996.9,288L1033.8,288L1033.8,64L1070.8,64L1070.8,256L1107.7,256L1107.7,128L1144.6,128L1144.6,32L1181.5,32L1181.5,64L1218.5,64L1218.5,192L1255.4,192L1255.4,128L1292.3,128L1292.3,288L1329.2,288L1329.2,32L1366.2,32L1366.2,64L1403.1,64L1403.1,160L1440,160L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p><?php echo ucwords($data[0]['About1']); ?></p>
                </div>
                <div class="col-md-4">
                    <p><?php echo ucwords($data[0]['About2']); ?></p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#5000ca" fill-opacity="1" d="M0,128L0,256L36.9,256L36.9,192L73.8,192L73.8,64L110.8,64L110.8,160L147.7,160L147.7,224L184.6,224L184.6,64L221.5,64L221.5,192L258.5,192L258.5,288L295.4,288L295.4,32L332.3,32L332.3,64L369.2,64L369.2,288L406.2,288L406.2,192L443.1,192L443.1,128L480,128L480,224L516.9,224L516.9,128L553.8,128L553.8,288L590.8,288L590.8,320L627.7,320L627.7,192L664.6,192L664.6,288L701.5,288L701.5,224L738.5,224L738.5,192L775.4,192L775.4,128L812.3,128L812.3,288L849.2,288L849.2,256L886.2,256L886.2,64L923.1,64L923.1,128L960,128L960,32L996.9,32L996.9,288L1033.8,288L1033.8,64L1070.8,64L1070.8,256L1107.7,256L1107.7,128L1144.6,128L1144.6,32L1181.5,32L1181.5,64L1218.5,64L1218.5,192L1255.4,192L1255.4,128L1292.3,128L1292.3,288L1329.2,288L1329.2,32L1366.2,32L1366.2,64L1403.1,64L1403.1,160L1440,160L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3 text-white">
                <div class="col">
                    <h2>Projects</h2>
                    <p><?php echo ucwords($data[0]['DeskProject']); ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card project-tile">
                        <img src="img/desainweb.jpg" class="card-img-top" alt="Project 1" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($data[0]['Judul1']); ?></h5>
                            <p class="card-text"><?php echo ucwords($data[0]['Desk1']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card project-tile">
                        <img src="img/bloodbank.png" class="card-img-top" alt="Project 2" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($data[0]['Judul2']); ?></h5>
                            <p class="card-text"><?php echo ucwords($data[0]['Desk2']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card project-tile">
                        <img src="img/hospitalweb.png" class="card-img-top" alt="Project 3" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($data[0]['Judul3']); ?></h5>
                            <p class="card-text"><?php echo ucwords($data[0]['Desk3']); ?></p>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Akhir Projects -->

    <!-- Skills -->
    <section id="skills">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#5000ca" fill-opacity="1" d="M0,128L0,256L36.9,256L36.9,192L73.8,192L73.8,64L110.8,64L110.8,160L147.7,160L147.7,224L184.6,224L184.6,64L221.5,64L221.5,192L258.5,192L258.5,288L295.4,288L295.4,32L332.3,32L332.3,64L369.2,64L369.2,288L406.2,288L406.2,192L443.1,192L443.1,128L480,128L480,224L516.9,224L516.9,128L553.8,128L553.8,288L590.8,288L590.8,320L627.7,320L627.7,192L664.6,192L664.6,288L701.5,288L701.5,224L738.5,224L738.5,192L775.4,192L775.4,128L812.3,128L812.3,288L849.2,288L849.2,256L886.2,256L886.2,64L923.1,64L923.1,128L960,128L960,32L996.9,32L996.9,288L1033.8,288L1033.8,64L1070.8,64L1070.8,256L1107.7,256L1107.7,128L1144.6,128L1144.6,32L1181.5,32L1181.5,64L1218.5,64L1218.5,192L1255.4,192L1255.4,128L1292.3,128L1292.3,288L1329.2,288L1329.2,32L1366.2,32L1366.2,64L1403.1,64L1403.1,160L1440,160L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z"></path>
        </svg>
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Skills</h2>
                    <p style="text-align: left;"><?php echo ucwords($data[0]['skills1']); ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #5000ca; text-align: right" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                    <br>
                    <p style="text-align: left;"><?php echo ucwords($data[0]['skills2']); ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #5000ca; text-align: right" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <br>
                    <p style="text-align: left;"><?php echo ucwords($data[0]['skills3']); ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%; background-color: #5000ca; text-align: right" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <br>
                    <p style="text-align: left;"><?php echo ucwords($data[0]['skills4']); ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #5000ca; text-align: right" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <br>
                    <p style="text-align: left;"><?php echo ucwords($data[0]['skills5']); ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%; background-color: #5000ca; text-align: right" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <br>
                    <p style="text-align: left;"><?php echo ucwords($data[0]['skills6']); ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #5000ca; text-align: right" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
    </section>
    <!-- Akhir Skills -->

    <!-- Contact -->
    <section id="contact">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L0,256L36.9,256L36.9,192L73.8,192L73.8,64L110.8,64L110.8,160L147.7,160L147.7,224L184.6,224L184.6,64L221.5,64L221.5,192L258.5,192L258.5,288L295.4,288L295.4,32L332.3,32L332.3,64L369.2,64L369.2,288L406.2,288L406.2,192L443.1,192L443.1,128L480,128L480,224L516.9,224L516.9,128L553.8,128L553.8,288L590.8,288L590.8,320L627.7,320L627.7,192L664.6,192L664.6,288L701.5,288L701.5,224L738.5,224L738.5,192L775.4,192L775.4,128L812.3,128L812.3,288L849.2,288L849.2,256L886.2,256L886.2,64L923.1,64L923.1,128L960,128L960,32L996.9,32L996.9,288L1033.8,288L1033.8,64L1070.8,64L1070.8,256L1107.7,256L1107.7,128L1144.6,128L1144.6,32L1181.5,32L1181.5,64L1218.5,64L1218.5,192L1255.4,192L1255.4,128L1292.3,128L1292.3,288L1329.2,288L1329.2,32L1366.2,32L1366.2,64L1403.1,64L1403.1,160L1440,160L1440,0L1403.1,0L1403.1,0L1366.2,0L1366.2,0L1329.2,0L1329.2,0L1292.3,0L1292.3,0L1255.4,0L1255.4,0L1218.5,0L1218.5,0L1181.5,0L1181.5,0L1144.6,0L1144.6,0L1107.7,0L1107.7,0L1070.8,0L1070.8,0L1033.8,0L1033.8,0L996.9,0L996.9,0L960,0L960,0L923.1,0L923.1,0L886.2,0L886.2,0L849.2,0L849.2,0L812.3,0L812.3,0L775.4,0L775.4,0L738.5,0L738.5,0L701.5,0L701.5,0L664.6,0L664.6,0L627.7,0L627.7,0L590.8,0L590.8,0L553.8,0L553.8,0L516.9,0L516.9,0L480,0L480,0L443.1,0L443.1,0L406.2,0L406.2,0L369.2,0L369.2,0L332.3,0L332.3,0L295.4,0L295.4,0L258.5,0L258.5,0L221.5,0L221.5,0L184.6,0L184.6,0L147.7,0L147.7,0L110.8,0L110.8,0L73.8,0L73.8,0L36.9,0L36.9,0L0,0L0,0Z"></path>
        </svg>
        <div class="container">
            <div class="row text-center mb-3 text-white"">
                <div class=" col">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center text-white"">
                <div class=" col-md-6">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name">
                </div>
            </form>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Kirim</button>
            </form>
        </div>
        </div>
        </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class=" text-white text-center p-2" style="background-color: #5000ca">
        <p>Created by <a href="https://www.instagram.com/mbagus__/" class="text-white fw-bold text-center">Muhammad Bagus Pratama</a></p>
    </footer>
    <!-- End Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>