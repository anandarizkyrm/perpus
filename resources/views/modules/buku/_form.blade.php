
                <div class="form-group">
                    <label for="" class="mb-1">Judul Buku</label>
                    <input type="text" class="form-control py-4"  value="{{is_null($buku) ? old('name') : $buku->judul}}" name="judul" placeholder="Masukkan Judul" required autofocus>
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">ISBN</label>
                    <input type="text" class="form-control py-4"  value="{{is_null($buku) ? old('isbn') : $buku->isbn}}" name="isbn" placeholder="Masukkan ISBN" required>
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Penerbit</label>
                    <input type="text" class="form-control py-4"  value="{{is_null($buku) ? old('Penerbit') : $buku->penerbit}}" name="penerbit" placeholder="Tambahkan Penerbit" required >
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Tahun Terbit</label>
                    <input type="number" class="form-control py-4"  value="{{is_null($buku) ? old('tahun terbit') : $buku->tahun_terbit}}" name="tahun_terbit" placeholder="Tahun Terbit Buku" required>
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Jumlah</label>
                    <input type="number" class="form-control py-4"  value="{{is_null($buku) ? old('Jumlah') : $buku->jumlah}}" name="jumlah" placeholder="Jumlah Buku" required>
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Deskripsi</label>
                    <textarea class="form-control py-4" placeholder="Isikan deskripsinya"  name="deskripsi">{{is_null($buku) ? old('-') : $buku->deskripsi}}</textarea>
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Lokasi</label>
                    {!! Form::select('lokasi',[""=>'--Pilih Lokasi rak--','rak1'=>'RAK 1', 'rak2'=>'RAK 2', 'rak3' => 'RAK 3'],null,['class' =>'form-control'])!!}
                </div>

                <div class="form-group">
                    <label for="" class="mb-1">Upload Cover Buku</label>
                    <input  type="file" name="cover" class="form-control" id="cover">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="{{route('user.index')}}" class="btn btn-sm btn-danger" > Kembali</a>
                </div>
