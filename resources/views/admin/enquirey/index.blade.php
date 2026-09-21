@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Enquirey
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Enquirey</li>
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
               <div class="row" style="margin-bottom: 10px;">
                  <div class="col-md-12">
                     <button style="padding: 10px 20px; margin-left: 20px;" class="btn btn-danger text-white delete_all" data-url="{{ route('admin.enquirey.deleteAll') }}">
                        <i class="fa fa-trash"></i> Delete Selected
                     </button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body" style="overflow-x:auto;margin-top:15px">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th width="50px" style="text-align: center;"><input type="checkbox" id="master"></th>
                           <th>Action</th>
                           <th>Email</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($enquireys as $enquirey)
                        <tr id="tr_{{$enquirey->id}}" data-id="{{$enquirey->id}}">
                           <td style="text-align: center;"><input type="checkbox" class="sub_chk" data-id="{{$enquirey->id}}"></td>
                           <td>
                              <a href="{{route('admin.enquirey.destroy', $enquirey->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>{{$enquirey->email}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$enquireys->links('pagination::bootstrap-4')}}
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