<!DOCTYPE html>
<html lang="en">
<head>
  <title>KK</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="vendors/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/aos/css/aos.css">
  <link rel="stylesheet" href="css/style.min.css">
  <style>



#datatablesSimple {
    width: 100%; /* Menyesuaikan lebar tabel dengan lebar modal */
    padding: 10px; /* Menambahkan padding pada seluruh tabel */
}





    </style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
      <h2 style="color:red">KK</h2>
        <!-- <img src="images/Group2.svg" alt=""> -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              
              <!-- <img src="images/Group2.svg" alt=""> -->
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#digital-marketing-section">Jurusan</a>  
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Universitas</a>
          </li> -->
          
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
          <form action="{{ route('admin.login')}}">
            <button class="btn btn-info" >Login</button>
          </form>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Tentukan jurusan yang sesuai dengan <br>minat anda</h1>
      <h6 class="font-weight-normal text-muted pb-3">{{$home->ketJudul}}</h6>
      <div>
        <form action="{{ route('pertanyaan.pertanyaan')}}">
      <button class="btn btn-info" >Mulai</button>
       </form>
      </div>
      <img src="images/Group171.svg" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>{{$home->kk}}</h2>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="images/Group12.svg" alt="" class="img-icons">
              <h5 class="py-3">{{$home->ketkk}}</h5>
              
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="images/Group7.svg" alt="" class="img-icons">
              <h5 class="py-3">Ketahui Jurusan yang cocok</h5>
              
            </div>
          </div>
          <!-- <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="images/Group5.svg" alt="" class="img-icons">
              <h5 class="py-3">Tentukan<br>Universitas</h5>
              
            </div>
          </div> -->
        </div>
      </section>     
      <section class="digital-marketing-service" id="digital-marketing-section">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0">{{$home->jurusan1}}</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted">{{$home->ket1jurusan1}}</p>
              <p class="font-weight-medium text-muted">{{$home->ket1jurusan2}}</p>
            </div>    
          </div>
          <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
            <img src="images/Group1.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
            <img src="images/Group2.png" alt="" class="img-fluid">
          </div>
          <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
            <h3 class="m-0">{{$home->jurusan}}</h3>
            <div class="col-lg-9 col-xl-8 p-0">
              <p class="py-4 m-0 text-muted"> Dengan kombinasi ini, mahasiswa diharapkan berkembang menjadi individu yang terampil dan berpengetahuan,</p>
              <p class="pb-2 font-weight-medium text-muted">siap menghadapi tantangan di dunia kerja atau melanjutkan studi lebih lanjut.</p>
            </div>
                <button class="btn btn-info" data-toggle="modal" data-target="#jurusanModal">Lihat Jurusan</button>
          </div>
        </div>
      </section>     
      <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin">
          <div class="col-12 text-center pb-5">
            <h2>Profesi</h2>
            <h6 class="section-subtitle text-muted">dari lulusan Teknik Informatika.</h6>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img src="images/Group95.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Online Marketing</h6>
                    <p>Seo, Marketing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-warning text-center card-contents">
                  <div class="card-image">
                      <img src="images/Group108.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Development</h6>
                    <p>Developing, Designing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-violet text-center card-contents">
                  <div class="card-image">
                      <img src="images/Group126.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Designing</h6>
                    <p>Designing, Developing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-success text-center card-contents">
                  <div class="card-image">
                      <img src="images/Group115.svg" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Software Development</h6>
                    <p>Developing, Designing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>     
      
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2019<a href="https://www.bootstrapdash.com/" class="px-1">Bootstrapdash.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- Modal -->
<div class="modal fade justify-content-center" id="jurusanModal" tabindex="-1" role="dialog" aria-labelledby="jurusanModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-x1" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jurusanModalLabel">Daftar Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <table id="datatablesSimple" class="table table-striped">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($jurusan as $data)
              <tr>
                <td>{{ $data->nama }}</td>
                <td>
                  <a href="{{ route('jurusan.show', $data->id) }}" class="btn btn-outline-info">Detail</i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="vendors/aos/js/aos.js"></script>
  <script src="js/landingpage.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="admin/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="admin/js/datatables-simple-demo.js"></script>  
</body>
</html>