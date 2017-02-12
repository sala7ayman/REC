@extends('admin.templates.adminmaster')
@section('content')
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><i class="fa fa-camera"></i>
            About Us
          </h1>
          <ol class="breadcrumb">
            <li><a href="/admin/index"><i class="fa fa-dashboard"></i> Control panel</a></li>
            <li class=""><a href="/admin/aboutus">About Us</a></li>
            <li class="active">Update</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
           
          
          <!-- Main row -->
          <div class="row">
              <form action="update" class="form-horizontal" id="postForm" enctype="multipart/form-data" method="post" accept-charset="utf-8" >
                  <input type="hidden" name="csrf_test_name" value="57f0232011f3ce4dd16584e6296f6973" style="display:none;" />
                      {{ csrf_field() }}
  

              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                      <h3 class="box-title">About Us Details</h3>
                  </div>

                    <div class="box-body">
                      <div class="form-group">
                        <label  class="col-sm-2 control-label" for="title" required>Title</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="{{$aboutus->ourhistory}}" id="title"  placeholder="Title" required />
                        </div>
                      </div>
                      <div class="form-group">
                            <label  class="col-sm-2 control-label" for="desc">Description</label>
                            <div class="col-sm-10">
                                <textarea rows="4" cols="50" class="form-control" name="desc" value="{{$aboutus->desc}}" id="desc"  placeholder="Description" required></textarea>
                            </div>
   
                      </div>
  
                        
                    
                    </div>



                </div>
              </div>
          
                
              <div class="col-md-12">
                  <div style="border-top:none;border-bottom: 3px solid #00A65A;" class="box ">
                 
                     <div class="box-body">
                      
                      <div class="form-group">
                          <label style="text-align: left;" class="col-sm-2 control-label" for="photo">Photo</label>
                         <div id="wrapper" class="col-sm-10">
                              
                              <div  id="image-holder"></div>

                              <input id="fileUpload" style="margin-top: 13px;" type = "file" name = "photo" size = "20" value="{{$aboutus ->photo}}" required />

                          </div>
                      </div>
                    </div>


                    <div class="box-footer">
                      <button type="submit" class="btn btn-info pull-left">Save</button>
                      <a class="btn btn-default pull-right" href="/admin/aboutus">Cancel</a>
                    </div>
                    


                    

                </div>
              </div>  
                  
              </form>         
             </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection