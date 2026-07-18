@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add Team Member
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Add Team Mamber</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- right column -->
         <div class="col-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
               <div class="box-header with-border">
                  <!-- <h3 class="box-title">Horizontal Form</h3> -->
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               {!! Form::open(['method'=>'POST', 'action'=> 'AdminTeamController@store','files'=>true,'class'=>'form-horizontal']) !!}
               @csrf
               <div class="box-body">
                  <div class="form-group">
                     <label for="name" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                        @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="file" class="col-sm-2 control-label">Profile image</label>
                     <div class="col-sm-4">
                        <input type="file" name="file" id="file" class="form-control border border-dark mb-2" accept="image/*">
                        @if($errors->has('file'))
                        <div class="error text-danger">{{ $errors->first('file') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="occupation" class="col-sm-2 control-label">Profession</label>
                     <div class="col-sm-4">
                        <input type="text" name="occupation" id="occupation" class="form-control border border-dark mb-2" placeholder="Enter profession with reference">
                        @if($errors->has('occupation'))
                        <div class="error text-danger">{{ $errors->first('occupation') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Display Order</label>
                     <div class="col-sm-4">
                        <p class="form-control-static">Assigned automatically to the last position</p>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="facebook" class="col-sm-2 control-label">Facebook Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="facebook" id="facebook" class="form-control border border-dark mb-2" placeholder="Enter facebook link">
                        @if($errors->has('facebook'))
                        <div class="error text-danger">{{ $errors->first('facebook') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="instagram" class="col-sm-2 control-label">Instagram Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="instagram" id="instagram" class="form-control border border-dark mb-2" placeholder="Enter instagram link">
                        @if($errors->has('instagram'))
                        <div class="error text-danger">{{ $errors->first('instagram') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="twitter" class="col-sm-2 control-label">Twitter Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="twitter" id="twitter" class="form-control border border-dark mb-2" placeholder="Enter twitter link">
                        @if($errors->has('twitter'))
                        <div class="error text-danger">{{ $errors->first('twitter') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="linkdin" class="col-sm-2 control-label">Linkdin Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="linkdin" id="linkdin" class="form-control border border-dark mb-2" placeholder="Enter linkdin link">
                        @if($errors->has('linkdin'))
                        <div class="error text-danger">{{ $errors->first('linkdin') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-3 col-sm-2 control-label">
                        {!! Form::submit('Add', ['class'=>'btn btn-success text-white mt-1']) !!}
                     </div>
                  </div>
               </div>
               {!! Form::close() !!}
            </div>
            <!-- /.box -->
         </div>
         <!--/.col (right) -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection