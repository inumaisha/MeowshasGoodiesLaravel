@extends('adminLayout.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Products</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table id="example1" class="table table-boredered table-striped">
              <thead>
                  <tr>
                      <th>
                          Num
                      </th>  
                     <th>
                        Picture
                    </th>
                    <th>
                        Product Name
                    </th>
                      <th>
                          Product Category
                      </th>
                      <th>
                        Product Price
                    </th>
                      <th>
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          <img src="backend/dist/img/hellokitty.png" style="height : 50px;
                          width : 50px" class="img-circle elevation-2" alt="User Image">
                      </td>
                      <td>HELLO KITTY PLUSH</TD>
                <td> Cute Crochet 
                      </td>
                      <td> 5</td>

                    
                      </td>
                      <td>
                          <a class="btn btn-warning" href="#">
                              Activate
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                 
                  <tr>
                    <td>
                        2
                    </td>
                    <td>
                        <img src="backend/dist/img/user2-160x160.jpg" style="height : 50px;
                        width : 50px" class="img-circle elevation-2" alt="User Image">
                    </td>
                    <td>HELLO KITTY PLUSH</TD>
              <td> Cute Crochet
                    </td>
                    <td> 5</td>

                  
                    </td>
                    <td>
                        <a class="btn btn-success" href="#">
                            Unactivate
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

@section('style')
<link rel="stylesheet" href="backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('scripts')
<!-- DataTables  & Plugins -->
<script src="backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="backend/dist/js/adminlte.min.js"></script>
<script src="backend/dist/js/bootbox.min.js"></script>

<script>
    $(document).on("click", "#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      bootbox.confirm("Do you really want to delete this element?", function(confirmed){
        if(confirmed){
          window.location.href = link;
        };
      });
    });
  </script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,  
        "autoWidth": false,
      });
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

@endsection