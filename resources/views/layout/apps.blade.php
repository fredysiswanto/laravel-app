<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IPKP - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="{{asset('css/custome.css')}}">
</head>

<body >


  <div class="container">
    @yield('content')
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.js"></script>

  <script>
    //message with sweetalert
    @if(session('success'))
    Swal.fire({
      icon: "success",
      title: "BERHASIL",
      text: "{{ session('success') }}",
      showConfirmButton: false,
      timer: 2000
    });
    @elseif(session('error'))
    Swal.fire({
      icon: "error",
      title: "GAGAL!",
      text: "{{ session('error') }}",
      showConfirmButton: false,
      timer: 2000
    });
    @endif
  </script>



  <!-- <script>
    CKEDITOR.replace('description');
  </script> -->
  <script>
    const config_flatpickr = {
      altInput: true,
      altFormat: "j F Y | H:i",
      dateFormat: "Y-m-d H:i",
      enableTime: true,
      defaultHour: "8",
      time_24hr: true,
      minuteIncrement: "30"
    };
    flatpickr('.tanggal', config_flatpickr);
  </script>
</body>

</html>
