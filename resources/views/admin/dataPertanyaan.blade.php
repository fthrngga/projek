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
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="admin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
      <a href="{{ route('home.viewAdmin')}}">
        <img src="images/Group2.svg" alt="Deskripsi Gambar">
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="images/Group2.svg" alt="">
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
  <div class="banner" >
    <div class="container">
                
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pertanyaan
            </div>
            
            <div class="card-body">
            <form action="{{ route('pertanyaan.create') }}">
                <button class="btn btn-info">Tambah Data</button>
            </form>
                <table id="datatablesSimple">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Pertanyaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pertanyaan as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->pertanyaan }}</td>
                            <td>
                                <a href="{{ route('pertanyaan.edit', $data->id) }}" class="btn btn-outline-warning">Edit</i></a>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                            
                </table>
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