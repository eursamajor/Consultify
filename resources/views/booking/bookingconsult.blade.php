@extends('layouts.main')
@section('container')

  <section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Lakukan pemesanan</span>
            <h1 class="text-capitalize mb-5 text-lg">Janji temu</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <div class="mt-3">
              <div class="feature-icon mb-3">
                <i class="icofont-support text-lg"></i>
              </div>
              <span class="h3">Layanan darurat!</span>
                <h2 class="text-color mt-3">+62 789 1256 </h2>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              <h2 class="mb-2 title-color">Pemesanan janji temu</h2>
              <p class="mb-4">Atur jadwal dengan konselor, pastikan agar datang 30 menit sebelum waktu yang dijadwalkan</p>
                <form method="post" action="/booking">
                  @csrf
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="jenis_konsultasi"></label>
                                  <select class="form-control" id="jenis_konsultasi">
                                    <option>Jenis Konsultasi</option>
                                    <option>Karir Pekerjaan</option>
                                    <option>Kesehatan Mental</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="konselor"></label>
                                  <select class="form-control" id="konselor">
                                    <option>Pilih Konselor</option>
                                    <option>Hermawan</option>
                                    <option>Raditha</option>
                                    <option>Rexcel</option>
                                    <option>Dwiko</option>
                                    <option>Miracle</option>
                                  </select>
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="date"></label>
                                <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="time"></label>
                                <input name="time" id="time" type="time" class="form-control" placeholder="Time">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="name"></label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                              </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label for="phone"></label>
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                              </div>
                          </div>
                      </div>
                      <div class="form-group-2 mb-4">
                        <label for="messahe"></label>
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-main btn-round-full" href="pembayaran.php">Lakukan Pemesanan<i class="icofont-simple-right ml-2"></i></button>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection