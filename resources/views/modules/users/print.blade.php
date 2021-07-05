<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  font-family: sans-serif;
  font-size: 12px;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h3{
    font-family: sans-serif;
    font-weight: 400;
    text-align: center;
    margin-bottom: 40px;
}
</style>
</head>
<body>

<h3>Data Pengguna</h3>

<table>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Tanggal Registrasi</th>
  </tr>
  <?php $no=1; ?>
  @foreach ($user as $u)
      <tr>
          <td>{{$no++}}</td>
          <td>{{$u->name}} {{$u->last_name}}</td>
          <td>{{$u->email}}</td>
          <td>{{date_format($u->created_at,"d M Y")}}</td>
      </tr>
  @endforeach
</table>

</body>
</html>
