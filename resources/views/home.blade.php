<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modern Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
      background-color: #f9f9f9;
    }

    /* Hero Section styling */
    #home-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 100px 0;
      background-color:rgb(245, 240, 250); /* Purple background */
      color: white;
    }

    .text-section {
      flex: 1;
      max-width: 500px;
      text-align: center;
      padding-right: 20px;
    }

    .image-section {
      flex: 1;
      max-width: 500px;
      padding-left: 20px;
    }

    .image-section img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .btn {
      margin: 10px;
      padding: 15px 30px;
      font-size: 1rem;
      border-radius: 50px;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    /* About Section */
    #about-section {
      padding: 80px 0;
      background-color: #ffffff;
    }

    #about-section h2 {
      color:rgb(203, 166, 17);
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    #about-section p {
      color: #555;
      font-size: 1.1rem;
      text-align: center;
      line-height: 1.8;
    }

    /* Skills Section */
    #skills-section {
      padding: 80px 0;
      background-color: #f8f9fa;
      
    }
    #skills-section h2{
      color:rgb(203, 166, 17);
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
    }

    .progress-bar {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      transition: width 0.5s ease-in-out;
    }

    /* Certificate Section styling */
#certificate-section .card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#certificate-section .card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

#certificate-section .card-title {
  color: #333;
  font-weight: bold;
}

#certificate-section .card-text {
  color: #555;
  font-size: 1rem;
}

#certificate-section .btn {
  margin-top: 10px;
  padding: 8px 20px;
  font-size: 0.9rem;
  border-radius: 25px;
}

#certificate-section .btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}


    /* Projects Section */
    #projects-section {
      padding: 80px 0;
      background-color: #ffffff;
    }
/* Styling untuk section dan teks */
#projects-section {
  background-color: #f8f9fa;
  padding: 60px 0;
}

.section-title {
  font-size: 36px;
  font-weight: bold;
  color: #333;
  margin-bottom: 15px;
}

.section-description {
  font-size: 18px;
  color: #777;
  margin-bottom: 30px;
}

/* Styling untuk card proyek */
.project-card {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.project-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.project {
  background-size: cover;
  background-position: center;
  height: 250px;
  position: relative;
}

.project .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.project:hover .overlay {
  opacity: 1;
}

.project .text {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  font-size: 18px;
  transition: transform 0.3s ease;
}

.project:hover .text {
  transform: translateY(-10px);
}

.project-title {
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  margin-top: 15px;
  color: #333;
}

/* Responsivitas */
@media (max-width: 767px) {
  .project {
    height: 200px;
  }
  .project-title {
    font-size: 18px;
  }
}


    /* Contact Section */
    #contact-section {
      padding: 80px 0;
      background-color: #f8f9fa;
    }

    .contact-box {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 30px;
      transition: transform 0.3s ease;
    }

    .contact-box:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    footer {
      background: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="70">

<!-- Navigation -->
<x-navuser></x-navuser>
@foreach($home as $row)
<!-- Hero Section -->
<section id="home-section" class="hero">
  <div class="container d-flex flex-wrap align-items-center justify-content-center">
    <div class="text-section" data-aos="fade-right">
      <h1 class="display-3 text-dark">{{$row->title}}</h1>
      <p class="lead text-dark">{{$row->description}}</p>
      
    </div>
    <div class="image-section" data-aos="fade-left">
      <img src="asset-landing-page/img/avsv.png" alt="Portfolio Image">
    </div>
  </div>
</section>
@endforeach


<!-- About Section -->
@foreach($abouts as $row)
<section id="about-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
        <h2>{{$row->title}}</h2>
        <p>{{$row->description}}</p>
      </div>
    </div>
  </div>
</section>
@endforeach

<!-- Skills Section -->
<section id="skills-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-8" data-aos="fade-up">
        <h2>My Skills</h2>
        <p>Saya memiliki keahlian dalam berbagai teknologi dan alat. seperti berikut ini:</p>
      </div>
    </div>
    <div class="row">
  @foreach($skill as $row)
    <div class="col-md-4 mb-4"> <!-- Gunakan col-md-4 untuk 3 kolom per baris -->
      <div class="card shadow-sm my-3" style="border-radius: 10px; border: none;">
        <div class="card-body text-center">
          <h5 class="card-title mt-3">{{$row->title}}</h5>
          <img src="{{ asset('storage/' . $row->logo) }}" class="card-img-top" style="width: 80px; height: 80px;">
          <p class="mt-3 text-center" style="font-size: 14px; color: #555;">{{$row->description}}</p> <!-- Teks deskripsi diratakan di sini -->
        </div>
      </div>
    </div>
  @endforeach
</div>


</section>




<!-- Certificate Section -->
<section id="blog-section" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-5" style="color:rgb(203, 166, 17);">My Certificates</h2>
    <div class="row justify-content-center">
      @foreach($certificate as $row)
        <!-- Certificate Card 1 -->
        <div class="col-md-6 col-sm-6 mb-4"> <!-- Memperbesar kolom menjadi col-md-6 -->
          <div class="card shadow-sm border-light rounded" style="height: 100%;">
            <img src="{{ asset('storage/' . $row->thumbnail) }}" class="card-img-top" alt="Certificate 1" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div class="card-body" style="padding: 25px;">
              <h5 class="card-title">{{$row->name}}</h5> 
              <p class="card-text">{{$row->issued_by}}, {{$row->issued_at}}</p>
              <a href="{{ asset('storage/' . $row->file) }}" target="_blank" class="btn btn-primary btn-sm">Lihat Sertifikat</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


     

      <!-- More certificates can be added in the same format -->

    </div>
  </div>
</section>


<!-- Projects Section -->
<!-- Projects Section -->
<section id="projects-section" class="py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-md-8" data-aos="fade-up">
        <h2 class="section-title">My Projects</h2>
        <p class="section-description">Berikut adalah beberapa proyek yang telah saya kerjakan:</p>
      </div>
    </div>
    <div class="row">
      @foreach($project as $row)
      <div class="col-md-6 mb-6">
        <div class="project-card">
          <h3 class="project-title">{{ $row->name }}</h3>

          <!-- Cek ID Proyek untuk Menentukan Gambar -->
          @if($row->id == 1)
            <div class="project" style="background-image: url('{{ asset('asset-landing-page/img/icon.png') }}');">
            </div>
          @elseif($row->id == 7)
            <div class="project" style="background-image: url('{{ asset('asset-landing-page/img/icon2.png') }}');">
            </div>
          @else
            <div class="project" style="background-image: url('{{ asset('asset-landing-page/img/default-icon.png') }}');">
            </div>
          @endif

          <h4 class="project-description-text" style="color: #333; font-size: 16px; font-weight: 400; margin-top: 10px; text-align: justify;">
            {{ $row->description }}
          </h4>
          <a href="{{ $row->link }}" class="btn btn-primary" target="_blank">Lihat Proyek</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center" data-aos="fade-up">
        <h2 class="text-dark">Contact Me</h2>
        <p class="text-primary">Jangan ragu untuk menghubungi saya untuk kolaborasi atau hanya untuk menyapa!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="contact-box text-center" data-aos="fade-right">
          <i class="fas fa-phone fa-2x mb-3"></i>
          <h5>Phone</h5>
          <p>{{$contact->phone}}</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-box text-center" data-aos="fade-up">
          <i class="fas fa-envelope fa-2x mb-3"></i>
          <h5>Email</h5>
          <p>{{$contact->email}}</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-box text-center" data-aos="fade-left">
          <!-- Membungkus ikon dan teks dengan tag <a> yang mengarah ke profil Instagram -->
          <i class="fab fa-instagram fa-2x mb-3"></i> <!-- Ikon Instagram -->
          <h5>Instagram</h5> <!-- Label Instagram -->

          <!-- Membungkus teks dengan tag <a> untuk menuju profil Instagram -->
          <p>
            <a href="https://www.instagram.com/alvikarzaaa/profilecard/?igsh=bGtqYXd5NW5hOTU" 
               target="_blank" 
               class="text-decoration-none instagram-link">
              {{$contact->socialmedia}}
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tambahkan CSS untuk efek hover -->
<style>
  /* Efek hover untuk memperbesar teks saat kursor berada di atas teks */
  .instagram-link {
    transition: font-size 0.3s ease; /* Efek transisi yang halus */
  }

  .instagram-link:hover {
    font-size: 1.5em; /* Ukuran font membesar saat hover */
  }
</style>





</section>

<!-- Footer -->
<footer>
  <p>&copy; 2024 Your Name. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>s