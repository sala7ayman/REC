@extends('admin.templates.adminmaster')
@section('content')
@if(Session::has('success'))
  <script>
      swal("About us Data has been saved successfully!")
  </script>
  {{Session::forget('success')}}
@endif
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-camera"></i>
            About Us
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
              <div class="col-xs-12">
                  <div class="box">
                      <div class="box-header">
                          <a href="/admin/aboutus/create" style="width: 67px; float: right;" class="btn btn-block btn-success"><i class="fa   fa-plus-circle"></i> New</a>
                      </div>
                      <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Our History</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>


           @foreach ($about as $aboutus)
            
            <tr>
              <th> 
               <img src="/img/slider/{{$aboutus->photo}}"  class="user-image img-circle" height="45" width="45" alt="Image"/>
              </th>
              <td>{{ $aboutus->ourhistory }}</td>
              <td>{{ $aboutus->desc }}</td>
              <td>
             
                 <a href="/admin/aboutus/{{$aboutus->id}}/edit" class="btn btn-primary btn-md">
                 <i class="fa fa-edit"></i> Update</a>
              </td>
              <td>
                 <a href="/admin/aboutus/{{$aboutus->id}}/destroy" class="btn btn-danger btn-md">
                  <i class="fa  fa-trash-o"></i> Delete</a>
              </td>
            </tr>
            
          @endforeach
                   
                  </tbody>
                  <tfoot>
                  
                  </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            </div>
        </div>
      </div>
      </section>
    </div>
@endsection
