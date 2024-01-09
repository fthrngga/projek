



<!DOCTYPE html>
<html lang="en">
<head>
  <title>KK</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{url('vendors/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/owl-carousel/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{url('vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('vendors/aos/css/aos.css')}}">
  <link rel="stylesheet" href="{{url('css/style.min.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="{{url('admin/css/styles.css')}}" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <style>
    .container {
      display: flex;
      justify-content: center;
    }

    .form-container {
      width: 400px; /* Sesuaikan lebar formulir sesuai kebutuhan Anda */
      margin-right: 20px; /* Jarak antara formulir dan elemen lain di halaman */
    }

    .banner {
      width: 100%;
      background-color: #f2f2f2; /* Ganti warna background sesuai kebutuhan Anda */
    }
  </style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
  <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="{{url('images/Group2.svg')}}" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{url('images/Group2.svg')}}" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
        
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
          <form action="{{ route('home.index')}}">
            <button class="btn btn-info" >Logout</button>
          </form>
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>

  <div class="banner">
    <div class="container">
      <div class="form-container">
        <div class="card mb-4">
          <div class="card-header">
            Edit Data Jurusan
          </div>
          
          <div class="card-body">
            <form action="{{ route('jurusan.update', $jurusan->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                    <label class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $jurusan->nama }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan Jurusan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $jurusan->keterangan }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profesi</label>
                    <input type="text" class="form-control" id="profesi" name="profesi" value="{{ $jurusan->profesi }}">
                </div>                
                <button class="btn btn-info">Edit Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="{{url('vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('vendors/aos/js/aos.js')}}"></script>
    <script src="{{url('js/landingpage.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{url('admin/js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{url('admin/js/datatables-simple-demo.js')}}"></script>  
</body>
</html>
