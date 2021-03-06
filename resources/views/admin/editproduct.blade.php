@extends('adminLayout.admin')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{-- <form id="quickform"> --}}

                @if (Session::has('status'))
                <div class="alert alert-success">
                 {{Session::get('status')}}
                </div>
                @endif
  
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                
                {!!Form::open(['action' => 'App\Http\Controllers\ProductController@updateproduct', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                {{ csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    {{Form::hidden('id', $products->id)}}
                    {{-- <label for="exampleInputEmail1">Product Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                     --}}
                     {{Form::label('', 'Product Name', ['for' => 'exampleInputEmail1'])}}
                    {{Form::text('product_name', $products->product_name, ['class' => 'form-control', 'id' => 'exampleInputEmail1', 'placeholder' => 'Enter Product Name' ])}}
                  </div>
                  <div class="form-group">
                    {{-- <label for="exampleInputEmail1">Product Price</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Price" min="1"> --}}
                    {{Form::label('', 'Product Price', ['for' => 'exampleInputEmail1'])}}
                    {{Form::text('product_price', $products->product_price, ['class' => 'form-control', 'id' => 'exampleInputEmail1', 'placeholder' => 'Enter Product Price' ])}}
                  </div>

                  <div class="form-group">
                    <label>Product Category</label>
                   {{-- <select class="form-controll select2" style="width: 100%;">
                    <option selected="selected">CLay Crafts</option>
                    <option>Cute Crochet</option>
                    <option>Painting</option>#
                   </select> --}}

                   {{Form::select('product_category', $categories, $products->category, [ 'class' =>'form-control select2'])}}

                  </div>
                  {{-- <div class="form-group"> --}}
                 <label for="exampleInputFile"> Product Image</label>
                 <div class="input-group">

                    <div class="custom-file">
                      {{-- <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label> --}}
                      {{Form::file('product_image', ['class' => 'custom-file-input', 'id' => 'exampleInputFile'])}}
                      {{Form::label('', 'Choose File', ['class' => 'custom-file-label', 'for' => 'exampleInputFile'])}}
                     
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                  </div>
                 </div>
                 </div>
                  {{-- <div class="form-group"> --}}
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  {{-- <button type="submit" class="btn btn-danger">Save</button> --}}
                  {{Form::submit('Update', ['class' => 'btn btn-success' ])}}
                </div>
                {!!Form::close()!!}
              </form>
            </div>
            <!-- /.card -->

           
                     

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('scripts')
<script src="backend/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="backend/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="backend/dist/js/adminlte.js"></script>
<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
  </script>
@endsection