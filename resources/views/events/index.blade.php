@extends('layout.apps')

@section('title', 'Events')

@section('content')
<div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div>
          <h3 class="text-center my-4">List Data Events</h3>
          <h5 class="text-center"><a href="https://ipkp.co.id">IPKP Training</a></h5>
        </div>
        <div class="card border-0 shadow-sm rounded bg-dark">
          <div class="card-body">
            <a href="{{ route('events.create') }}" class="btn btn-md btn-success mb-3">Tambah Event</a>
            <table class="table table-bordered table-dark table-hover">
              <thead>
                <tr>
                  <th>Banner</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Tgl Event</th>
                  <th>Jumlah Partisipan</th>
                  <th scope="col" style="width: 20%">ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($events as $event )
                <tr>
                  <td class="text-center">

                    <img src="{{asset('storage/events/'.$event->img_banner) }}" width="150" height="100" alt="" srcset="">
                  </td>
                  <td>
                    {{ $event->title }}
                  </td>
                  <td>
                    {{ $event->description }}
                  </td>
                  <td>
                    {{ $event->start_time }}
                  </td>
                  <td>
                    {{ $event->max_participants }}
                  </td>
                  <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('events.destroy', $event->id) }}"
                      method="POST">
                      <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                      <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                  </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                  Data Event belum Tersedia.
                </div>
                @endforelse
              </tbody>
            </table>
            {{ $events->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection