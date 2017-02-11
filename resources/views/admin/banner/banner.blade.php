@extends('admin.templates.adminmaster')
@section('content')

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-camera"></i>
            Banner
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
                          <a href="{{ route('banners.create') }}" style="width: 67px; float: right;" class="btn btn-block btn-success"><i class="fa   fa-plus-circle"></i> New</a>
                      </div>
                      <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Photo</th>
                    <th>Main Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>


           @foreach ($banners as $banner)
            
            <tr>
              <th><img src="/img/slider/{{$banner->image_path}}"  class="user-image img-circle" height="45" width="45" alt="Image"/>
              </th>
              <td>{{ $banner->main_title }}</td>
              <td>{{ $banner->description }}</td>
              <td>
             
                 <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-primary btn-md">
                 <i class="fa fa-edit"></i> Update</a>
              </td>
              <td>
              {!! Form::open(['method' => 'DELETE', 'route' => ['banners.destroy', $banner->id],'id'=>'from1']) !!}
              {!! Form::hidden('case_id', $banner->id, ['class' => 'form-control']) !!}
              {!! Form::button('<i class="fa  fa-trash-o"> Delete</i>', array('type' => 'submit', 'class' => 'btn btn-danger ')) !!}
              {!! Form::close() !!}
              </td>
            </tr>
            
          @endforeach
                   
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Photo</th>
                    <th>Main Title</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
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
