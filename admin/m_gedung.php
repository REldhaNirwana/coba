<!-- Begin Page Content -->
<div class="container-fluid">



<!-- DataTales Example -->
<div class="card">
    <div class="card-body">
    <div class="card-title">
      <a href="m_gedung">
        <button type="button" class="btn btn-primary">Tambah Data</button>
      </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Gedung</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $no = 0; ?>
                    
                    <tr>
                        <th scope="row"><?php $no++;
                                            echo $no; ?></th>             
                            <td>{{$row->id_gedung}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->foto}}</td>
                            <td>{{$row->deskripsi}}</td>

                        <td>
                            <a href="/m_gedung/delete/{{$row->id_gedung}}">
                                <button type="button" class="btn btn-outline-danger btn-sm">Hapus</button>
                            </a>
                            <a href="/m_gedung/edit/{{$row->id_gedung}}">
                                <button type="button" class="btn btn-outline-primary btn-sm">Edit</button>
                            </a>
                         </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
