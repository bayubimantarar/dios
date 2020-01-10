@extends('layouts.main')

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('title')
  Pegawai
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card" style="margin-top: 25px;">
        <div class="card-body">
          <h5 class="card-title">Pegawai</h5>
          <p>
            <a href="/form-tambah" class="btn btn-sm btn-primary">Tambah</a>
          </p>
          <table id="pegawai-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>NIP</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Option</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script>
    var pegawai_table = $('#pegawai-table').DataTable({
      ajax: {
        url: '/data',
        type: 'get'
      },
      datatype: 'json',
      columns: [
        {data: 'nip'},
        {data: 'name'},
        {data: 'email'},
        {data: 'gender'},
        {data: 'hobby'},
        {data: 'action'}
      ],
      responsive: true
    });

    function destroy(id)
    {
      var confirmation = confirm("Yakin akan menghapus data ini?");

      if (confirmation) {
        $.ajax({
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            url: '/hapus/'+id,
            type: 'delete',
            dataType: 'json',
            success: function(result){
              alert('Data berhasil dihapus.');

              pegawai_table.ajax.reload();
            }
        });
      }
    }
  </script>
@endsection
