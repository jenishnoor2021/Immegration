@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Dashboard
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Dashboard</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
               <div class="inner">
                  <h3>{{$contact}}</h3>
                  <p>Contact us</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="{{URL::to('/admin/contact')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
               <div class="inner">
                  <h3>{{$enauiry}}</h3>
                  <p>Enquiry</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="{{URL::to('/admin/enquirey')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
               <div class="inner">
                  <h3>{{$teams}}</h3>
                  <p>Team members</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/team')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
               <div class="inner">
                  <h3>{{$testomonial}}</h3>
                  <p>Testomonial</p>
               </div>
               <div class="icon">
                  <i class="fa fa-check-square-o"></i>
               </div>
               <a href="{{URL::to('/admin/testomonial')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection