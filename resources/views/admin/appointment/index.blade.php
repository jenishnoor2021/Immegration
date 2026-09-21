@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Appointment
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Appointment</li>
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
                     <button style="padding: 10px 20px; margin-left: 20px;" class="btn btn-danger text-white delete_all" data-url="{{ route('admin.appointment.deleteAll') }}">
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
                           <th>Country</th>
                           <th>Visa Type</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone no</th>
                           <th>Date</th>
                           <th>Time</th>
                           <th>Address</th>
                           <th>Message</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($appointments as $appointment)
                        <tr id="tr_{{$appointment->id}}" data-id="{{$appointment->id}}">
                           <td style="text-align: center;"><input type="checkbox" class="sub_chk" data-id="{{$appointment->id}}"></td>
                           <td>
                              <a href="{{route('admin.appointment.destroy', $appointment->id)}}" onclick="return confirm('Sure ! You want to delete ?');"><i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i></a>
                           </td>
                           <td>{{$appointment->country}}</td>
                           <td>{{$appointment->service}}</td>
                           <td>{{$appointment->name}}</td>
                           <td>{{$appointment->email}}</td>
                           <td>{{$appointment->phone}}</td>
                           <td>{{$appointment->s_date}}</td>
                           <td>{{$appointment->time}}</td>
                           <td>
                              @if(strlen($appointment->address ?? '') > 100)
                              {{substr($appointment->address, 0, 100)}}
                              <span class="read-more-show hide_content">More <i class="fa fa-angle-down"></i></span>
                              <span class="read-more-content">{{substr($appointment->address, 100)}}
                                 <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span>
                              </span>
                              @else
                              {{$appointment->address}}
                              @endif
                           </td>
                           <td>
                              @if(strlen($appointment->message ?? '') > 100)
                              {{substr($appointment->message, 0, 100)}}
                              <span class="read-more-show hide_content">More <i class="fa fa-angle-down"></i></span>
                              <span class="read-more-content">{{substr($appointment->message, 100)}}
                                 <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span>
                              </span>
                              @else
                              {{$appointment->message}}
                              @endif
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="row mt-4">
                     <div class="col-sm-12" style="display:flex;justify-content:center;">
                        {{$appointments->links('pagination::bootstrap-4')}}
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