@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Team member
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Edit Team member</li>
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
               {!! Form::model($body['team'], ['method'=>'PATCH', 'action'=> ['AdminTeamController@update', $body['team']['id']],'files'=>true,'class'=>'form-horizontal']) !!}
               @csrf
               <div class="box-body">
                  <div class="form-group">
                     <label for="name" class="col-sm-2 control-label">Name</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" value="{{$body['team']['name']}}" required>
                        @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="name" class="col-sm-2 control-label">Profile image</label>
                     <div class="col-sm-3">
                        <input type="file" name="file" id="file" class="form-control border border-dark mb-2" accept="image/*">
                        @if($errors->has('file'))
                        <div class="error text-danger">{{ $errors->first('file') }}</div>
                        @endif
                     </div>
                     <div class="col-sm-1">
                        <img height="50" src="{{$body['team']['file'] ? $body['team']['file'] : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="occupation" class="col-sm-2 control-label">Profession</label>
                     <div class="col-sm-4">
                        <input type="text" name="occupation" id="occupation" class="form-control border border-dark mb-2" placeholder="Enter profession with reference" value="{{$body['team']['occupation']}}">
                        @if($errors->has('occupation'))
                        <div class="error text-danger">{{ $errors->first('occupation') }}</div>
                        @endif
                     </div>
                  </div>
                  
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Display Order</label>
                     <div class="col-sm-4">
                        <input type="number" class="form-control border border-dark mb-2" value="{{$body['team']['sort_order']}}" disabled>
                        <p class="help-block">Order is updated from the team list page only.</p>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="facebook" class="col-sm-2 control-label">Facebook Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="facebook" id="facebook" class="form-control border border-dark mb-2" placeholder="Enter facebook link" value="{{$body['team']['facebook']}}">
                        @if($errors->has('facebook'))
                        <div class="error text-danger">{{ $errors->first('facebook') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="instagram" class="col-sm-2 control-label">Instagram Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="instagram" id="instagram" class="form-control border border-dark mb-2" placeholder="Enter instagram link" value="{{$body['team']['instagram']}}">
                        @if($errors->has('instagram'))
                        <div class="error text-danger">{{ $errors->first('instagram') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="twitter" class="col-sm-2 control-label">Twitter Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="twitter" id="twitter" class="form-control border border-dark mb-2" placeholder="Enter twitter link" value="{{$body['team']['twitter']}}">
                        @if($errors->has('twitter'))
                        <div class="error text-danger">{{ $errors->first('twitter') }}</div>
                        @endif
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="linkdin" class="col-sm-2 control-label">Linkdin Link</label>
                     <div class="col-sm-4">
                        <input type="text" name="linkdin" id="linkdin" class="form-control border border-dark mb-2" placeholder="Enter linkdin link" value="{{$body['team']['linkdin']}}">
                        @if($errors->has('linkdin'))
                        <div class="error text-danger">{{ $errors->first('linkdin') }}</div>
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