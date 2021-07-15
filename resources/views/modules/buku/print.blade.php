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

<h3>Data Buku</h3>

<table>
  <tr>
    <th>No.</th>
    <th>Judul Buku</th>
    <th>Isbn</th>
    <th>Penerbit</th>
    <th>Jumlah</th>
    <th>Deskripsi</th>
    <th>Lokasi</th>
    <th>Cover Buku</th>

  </tr>
  <?php $no=1; ?>
  @foreach ($buku as $u)

      <tr>
          <td>{{$no++}}</td>
          <td>{{$u->judul}}</td>
          <td>{{$u->isbn}}</td>
          <td>{{($u->tahun_terbit)}}</td>
          <td>{{($u->jumlah)}}</td>
          <td>{{($u->deskripsi)}}</td>
          <td>{{($u->lokasi)}}</td>
          <td>
            <img src={{('cover/'.$u->cover)}} width="50" height="50" alt=""/>
          </td>
      </tr>

  @endforeach


</table>

</body>
</html>
