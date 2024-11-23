@extends('layout.apps')

@section('title', 'Events')

@section('content')



<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card border-0 shadow-sm rounded">
        <div class="card-body bg-dark">
          <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group mb-3">
              <label class="font-weight-bold">Banner Event</label>
              <input type="file" class="form-control @error('img_banner') is-invalid @enderror" name="img_banner" value="{{ old('img_banner') }}">

              <!-- error message untuk image -->
              @error('img_banner')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label class="font-weight-bold">Judul</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title') }}" placeholder="Masukkan Judul Event">

              <!-- error message untuk title -->
              @error('title')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label class="font-weight-bold">Deskrisi</label>
              <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                placeholder="Masukkan Description Event">{{ old('description') }}</textarea>

              <!-- error message untuk description -->
              @error('description')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label class="font-weight-bold">Harga</label>
                  <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                    value="{{ old('price') }}" placeholder="Masukkan Harga Event">

                  <!-- error message untuk price -->
                  @error('price')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label class="font-weight-bold">Jumlah Partisipan</label>
                  <input type="number" class="form-control @error('max_participants') is-invalid @enderror"
                    name="max_participants" value="{{ old('max_participants') }}" placeholder="Masukkan Quota Event">

                  <!-- error message untuk stock -->
                  @error('max_participants')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label class="font-weight-bold">Tanggal Mulai</label>
                  <input type="text" class="form-control tanggal @error('start_time') is-invalid @enderror"
                    name="start_time" value="{{ old('start_time') }}" placeholder="Masukkan Tanggal Mulai">

                  <!-- error message untuk stock -->
                  @error('start_time')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label class="font-weight-bold">Tanggal Selesai</label>
                  <input type="text" class="form-control tanggal @error('end_time') is-invalid @enderror"
                    name="end_time" value="{{ old('end_time') }}" placeholder="Masukkan Tanggal Mulai">

                  <!-- error message untuk stock -->
                  @error('end_time')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                  <label class="font-weight-bold">Lokasi</label>
                  <input type="text" class="form-control @error('location') is-invalid @enderror"
                    name="location" value="{{ old('location') }}" placeholder="Masukkan Lokasi Event">

                  <!-- error message untuk stock -->
                  @error('location')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
