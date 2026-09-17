@extends('layouts.admin')
@section('style')
<style>
   .team-page .box-header {
      padding-bottom: 0;
   }

   .team-page .team-actions {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 15px;
   }

   .team-page .team-table-wrap {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
   }

   .team-page #team-table {
      min-width: 760px;
      margin-bottom: 0;
   }

   .team-page #team-table th,
   .team-page #team-table td {
      vertical-align: middle;
   }

   .team-page .team-image {
      width: 50px;
      height: 50px;
      object-fit: cover;
   }

   .team-page .team-action {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 34px;
      height: 34px;
      margin-right: 4px;
      color: #fff;
      border-radius: 50%;
   }

   .team-page .team-action-edit {
      background-color: #0275d8;
   }

   .team-page .team-action-delete {
      background-color: #d9534f;
   }

   @media (max-width: 767px) {
      .team-page .content-header>h1 {
         margin-bottom: 8px;
      }

      .team-page .team-actions {
         justify-content: flex-start;
      }
   }
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper team-page">
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
               <div class="team-actions">
                  <a href="{{route('admin.team.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp; Add team member</a>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  @if(count($team)>0)
                  <div class="team-table-wrap">
                     <table id="team-table" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Drag</th>
                              <th>Action</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Occupation</th>
                              <th>Order</th>
                              <th>Show/ Hide</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($team as $emp)
                           <tr data-id="{{$emp->id}}">
                              <td class="drag-handle text-center" style="cursor:move; width:40px;"><i class="fa fa-arrows-alt"></i></td>
                              <td>
                                 <a href="{{route('admin.team.edit', $emp->id)}}" class="team-action team-action-edit" title="Edit team member"><i class="fa fa-edit"></i></a>
                                 <a href="{{route('admin.team.destroy', $emp->id)}}" class="team-action team-action-delete" title="Delete team member" onclick="return confirm('Sure ! You want to delete this ?');"><i class="fa fa-trash"></i></a>
                              </td>
                              <td>
                                 {{$emp->name}}
                              </td>
                              <td>
                                 <img class="team-image" src="{{$emp->file ? $emp->file : 'https://eitrawmaterials.eu/wp-content/uploads/2016/09/person-icon.png'}}" alt="{{$emp->name}}">
                              </td>
                              <td>
                                 {{$emp->occupation}}
                              </td>
                              <td class="order-value">
                                 {{$emp->sort_order}}
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
                  </div>
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

@section('script')
<script>
   $(function() {
      $('#team-table tbody').sortable({
         handle: '.drag-handle',
         axis: 'y',
         update: function(event, ui) {
            var order = [];
            $('#team-table tbody tr').each(function() {
               order.push($(this).data('id'));
            });

            $.ajax({
               url: "{{ route('admin.team.reorder') }}",
               method: 'POST',
               data: {
                  order: order,
                  _token: '{{ csrf_token() }}'
               },
               success: function(response) {
                  if (response.status === 'success') {
                     $('#team-table tbody tr').each(function(index) {
                        $(this).find('.order-value').text(index + 1);
                     });
                  }
               },
               error: function() {
                  alert('Unable to update team order.');
               }
            });
         }
      }).disableSelection();
   });
</script>
@endsection