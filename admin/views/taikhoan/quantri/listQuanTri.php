<?php include './views/layouts/header.php'; ?>
  <!-- Navbar -->
  <?php include './views/layouts/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include './views/layouts/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý tài khoản quản trị viên</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <a href="<?= BASE_URL_ADMIN.'?act=form-them-quan-tri';?>">
              <button class="btn btn-success">Thêm quản trị</button>
              </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên </th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listquantri as $key=>$quantri):?>
                      <tr>
                      <td><?= $key+1 ?></td>
                      <td><?= $quantri['ho_ten']?></td>
                      <td><?= $quantri['email']?></td>
                      <td><?= $quantri['so_dien_thoai']?></td>
                      <td><?= $quantri['trang_thai'] == 1 ? 'Active':'Inactive' ?></td>
                      <td>
                        <a href="<?= BASE_URL_ADMIN.'?act=form-sua-quan-tri&id_quan_tri='.$quantri['id']?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="<?= BASE_URL_ADMIN.'?act=reset-password&id_quan_tri='.$quantri['id']?>"><button class="btn btn-danger" 
                        onclick="confirm('Bạn có muốn reset password không?')">Reset</button></a>
                      </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>STT</th>
                    <th>Tên </th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <?php include './views/layouts/footer.php';?>
<script>
  $(function () {
    $("#example1").DataTable({"responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    }); 
  });
</script>
</body>
</html>