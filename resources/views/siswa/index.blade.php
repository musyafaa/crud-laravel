<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row">                        
                <div>
                    <!-- Button trigger modal -->
                    <nav class="navbar navbar-light bg-white">
                        <div class="container-fluid">
                            <h2><a class="navbar-brand">Data Siswa</a></h2>
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data Siswa
                            </button>
                        </div>
                    </nav>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/siswa/create" method="POST">
                                        {{csrf_field()}}
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                            <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                                            <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control mt-2" id="exampleFormControlSelect1">
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>   
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label mt-3">Agama</label>
                                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">                                        
                                        </div>    
                                        <div class="form-group">                                        
                                            <label for="exampleFormControlTextarea1">Alamat</label>
                                            <textarea name="alamat" class="form-control mt-2" id="exampleFormControlTextarea1" rows="3"></textarea>                                        
                                        </div>  
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                        </div>   
                                    </form>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>            

            
            <table class="table table-hover">
                <tr>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama_depan}}</td>
                    <td>{{$siswa->nama_belakang}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->alamat}}</td>
                </tr>
                @endforeach
            </table>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>





