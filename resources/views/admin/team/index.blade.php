@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Team List
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Team List</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
               </div>
               <div class="row">
                  <div class="col-md-9">
                     <a href="{{route('admin.team.create')}}" class="bg-primary text-white text-decoration-none" style="padding:12px 12px;margin-left:20px"><i class="fa fa-plus editable" style="font-size:15px;">&nbsp;ADD</i></a>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  @if(count($team)>0)
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>Action</th>
                           <th>Name</th>
                           <th>Image</th>
                           <th>Occupation</th>
                           <th>Show/ Hide</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($team as $emp)
                        <tr id="tr_{{$emp->id}}">
                           <td>
                              <a href="{{route('admin.team.edit', $emp->id)}}"><i class="fa fa-edit" style="color:white;font-size:15px;background-color:#0275d8;padding:8px;border-radius:200px;"></i></a>
                              <a href="{{route('admin.team.destroy', $emp->id)}}" onclick="return confirm('Sure ! You want to delete this ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>
                              {{$emp->name}}
                           </td>
                           <td>
                              <img height="50" src="{{$emp->file ? $emp->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="">
                           </td>
                           <td>
                              {{$emp->occupation}}
                           </td>
                           <td>
                              @if($emp->is_show == 0)
                              <a href="{{route('admin.team.status', $emp->id)}}" class="btn btn-danger">Hide</a>
                              @else
                              <a href="{{route('admin.team.status', $emp->id)}}" class="btn btn-success">Show</a>
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  @endif
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$team->links('pagination::bootstrap-4')}}
                     </div>
                  </div>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection