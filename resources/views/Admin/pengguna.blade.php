@extends('admin/template_admin')
@section('konten')
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h6>Data Petugas</h6>
            </div>
            <div class=" card-body table-responsive">
                <table class="table table-boardered table-striped" id="thetable">
                    <thead>
                        <th>No</th>
                        <th>username</th>
                        <th>Nama Petugas</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    <?php foreach ($pengguna as $key => $value): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $value['unsername'];  ?></td>
                        <td><?php echo $value['nama_pengguna'];  ?></td>
                        <td nowrap="TRUE">
                            <a href="<?php echo url('admin/petugas/edit/' . $value['nip'])?>" class="btn btn-warning">Edit</a>
                            <form method="post" action=" <?php echo  url('admin/petugas/hapus/' . $value['nip']);
                            ?> "class="d-inline"" >
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Anda Yakin ?')">hapus
                            </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="<?php echo url('admin/pengguna/tambah'); ?> "class="btn btn-primary""> <i class="bi bi-plus-circle"></i>Tambah </a>

            </div>
        </div>
    </div>
@endsection