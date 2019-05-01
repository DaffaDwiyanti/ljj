<style>
header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<div class="container" style="margin-top:10px;">
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
          @foreach($materi as $m)
        <h3 class="display-6"  style="margin-top:390px;">{{$m->materi}}</h1>
        @endforeach
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
          @foreach($materi as $m)
        <p>{{$m->deskripsi}}</p>
        @endforeach
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>
<br>
<div style="margin-left:355px;">
<nav aria-label="Materi Pagination">
  <ul class="pagination pagination-lg">
      
    <li class="page-item"><a class="page-link" href="/" tabindex="-1">Home</a></li>
    <li class="page-item"><a class="page-link" href="/peserta">Account</a></li>
    <li class="page-item"><a class="page-link" href="/kelaspeserta">Kelas</a></li>
    <li class="page-item"><a class="page-link" href="/finish" data-toggle="modal" data-target="#exampleModal">Selesai</a></li>
  </ul>
</nav>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apa anda yakin sudah memahami materi ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Agreement........
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>

        @foreach($materi as $m)
        <a href="/selesai/{{$m->id}}" type="button" class="btn btn-primary">Ya</a>
        @endforeach
      </div>
    </div>
  </div>
</div>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    