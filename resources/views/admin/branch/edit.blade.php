@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Branch
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Edit Branch</li>
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
               {!! Form::model($body['branch'], ['method'=>'PATCH', 'action'=> ['AdminBranchsController@update', $body['branch']['id']],'files'=>true,'class'=>'form-horizontal']) !!}
               @csrf
               <div class="box-body">
                  <div class="form-group">
                     <label for="country" class="col-sm-2 control-label">Country</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="country" id="country" value="{{$body['branch']['country']}}" required>
                        @if($errors->has('country'))
                        <div class="error text-danger">{{ $errors->first('country') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="name" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{$body['branch']['name']}}" required>
                        @if($errors->has('branch'))
                        <div class="error text-danger">{{ $errors->first('branch') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="address" class="col-sm-2 control-label">Address</label>
                     <div class="col-sm-3">
                        <input type="text" name="address" id="address" class="form-control border border-dark mb-2" value="{{$body['branch']['address']}}">
                        @if($errors->has('address'))
                        <div class="error text-danger">{{ $errors->first('address') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                     <div class="col-sm-4">
                        <input type="number" name="mobile" id="mobile" class="form-control border border-dark mb-2" placeholder="Enter mobile" value="{{$body['branch']['mobile']}}">
                        @if($errors->has('mobile'))
                        <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-3 col-sm-2 control-label">
                        {!! Form::submit('update', ['class'=>'btn btn-success text-white mt-1']) !!}
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