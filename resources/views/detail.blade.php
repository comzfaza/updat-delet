@include('layout.navbar')

@section('content')
@endsection

<h1>HALAMAN DETAIL</h1>

    <table class="center" border="1">
      <tr>
        <th>ID</th>
        <th>tanggal</th>
        <th>PASSWORD</th>
        <th>ISILAPORAN</th>
        <th>TELEPON</th>
        <th>STATUS</th>
      </tr>
      <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td>{{$pengaduan->foto}}</td>
      <td>{{$pengaduan->status}}</td>
    </tr>
    <td>
      <a href="">PRINT</a>
    </td>

    </table>
