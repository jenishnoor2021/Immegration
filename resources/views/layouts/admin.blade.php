<?php

use App\Models\Testomonial;
use App\Models\Contact;
use App\Models\Enquirey;
use App\Models\VisaEnrollment;
use Illuminate\Support\Facades\Schema;

$countnew = Testomonial::where('is_approved', 0)->count();
$countnewcontact = Contact::where('is_show', 0)->count();
$countnewenqiry = Enquirey::where('is_show', 0)->count();
$countnewvisaenrollments = Schema::hasTable('visa_enrollments')
   ? VisaEnrollment::where('is_show', 0)->count()
   : 0;
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Dashboard</title>
   <link rel="icon" href="{{asset('assets/images/favicon.png')}}" sizes="32x32" type="image/png">
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
   <!-- Ionicons -->
   <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}">
   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <!-- trinymce  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
   <script>
      tinymce.init({
         selector: '#mytextarea',
         height: "200",
         plugins: [
            ''
         ],
         toolbar: '',
      });
   </script>
   <style>
      .boldclass {
         font-weight: bold;
      }

      /* p {
         -webkit-user-select: all; 
         -ms-user-select: all;
         user-select: all;
         margin: 0;
         white-space: pre-wrap;
         } */
      .read-more-show {
         cursor: pointer;
         color: #ed8323;
      }

      .read-more-hide {
         cursor: pointer;
         color: #ed8323;
      }

      .hide_content {
         display: none;
      }

      .error {
         color: red;
      }

      input[type="checkbox"]#master, input[type="checkbox"].sub_chk {
         cursor: pointer;
         width: 17px;
         height: 17px;
         margin: 0;
         vertical-align: middle;
      }
   </style>
   <!-- read more button in database -->

   <!-- read more button end in database -->
   @yield('style')
</head>

<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">
      <header class="main-header">
         <!-- Logo -->
         <a href="/admin/dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>C</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Seven Countries</b></span>
         </a>
         <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
               <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
                  @if(Session::has('user'))
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('/images/user-icone.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Session::get('user')['name']}}</span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                           <img src="{{asset('/images/user-icone.png')}}" class="img-circle" alt="User Image">
                           <br />
                           <span style="color:#fff">
                              {{Session::get('user')['name']}}<br />
                              {{Session::get('user')['username']}}
                           </span>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <div class="pull-right">
                              <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->
                  <!-- <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li> -->
                  @else
                  <li><a href="/">Login</a></li>
                  @endif
               </ul>
            </div>
         </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
         <!-- sidebar: style can be found in sidebar.less -->
         <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
               <div class="pull-left image">
                  <img src="{{asset('/images/user-icone.png')}}" class="img-circle" alt="User Image">
               </div>
               <div class="pull-left info">
                  @if(Session::has('user'))
                  <p>{{Session::get('user')['name']}}</p>
                  @else
                  <p>Alexander Pierce</p>
                  @endif
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
               </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                          </button>
                        </span>
                  </div>
                  </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
               <li class="header">MAIN NAVIGATION</li>
               <li class="{{ (request()->segment(2) == 'dashboard') ? 'active' : '' }}"><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
               <li class="{{ (request()->segment(2) == 'appointment') ? 'active' : '' }}"><a href="/admin/appointment"><i class="fa fa-dashboard"></i> <span>Appointment</span></a></li>
               <li class="{{ (request()->segment(2) == 'testomonial') ? 'active' : '' }}"><a href="/admin/testomonial"><i class="fa fa-dashboard"></i> <span>Testomonial</span></a></li>
               <li class="{{ (request()->segment(2) == 'team') ? 'active' : '' }}"><a href="/admin/team"><i class="fa fa-dashboard"></i> <span>Team</span></a></li>
               <li class="{{ (request()->segment(2) == 'enquirey') ? 'active' : '' }}"><a href="/admin/enquirey"><i class="fa fa-dashboard"></i> <span>Enquiry</span></a></li>
               <li class="{{ (request()->segment(2) == 'visa-enrollments') ? 'active' : '' }}"><a href="{{ route('admin.visa-enrollment') }}"><i class="fa fa-graduation-cap"></i> <span>Visa Enrollments @if($countnewvisaenrollments > 0)<small class="label pull-right bg-red">{{ $countnewvisaenrollments }}</small>@endif</span></a></li>
               <li class="{{ (request()->segment(2) == 'branch') ? 'active' : '' }}"><a href="/admin/branch"><i class="fa fa-dashboard"></i> <span>Branches</span></a></li>
               <!-- <li class="{{ (request()->segment(2) == 'quatation') ? 'active' : '' }}"><a href="/admin/quatation"><i class="fa fa-dashboard"></i> <span>Quatation</span></a></li> -->
               <li class="{{ (request()->segment(2) == 'contact') ? 'active' : '' }}"><a href="/admin/contact"><i class="fa fa-dashboard"></i> <span>Contact</span></a></li>
               <!-- <li class="{{ (request()->segment(1) == 'profile') ? 'active' : '' }}"><a href="/profile/{{Session::get('user')['id']}}"><i class="fa fa-dashboard"></i><span>Change password</span></a></li> -->
            </ul>
         </section>
         <!-- /.sidebar -->
      </aside>
      @yield('content')
   </div>
   <!-- ./wrapper -->
   @yield('script')

   <!-- read more button in database -->
   <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
   <script type="text/javascript">
      $('.read-more-content').addClass('hide_content')
      $('.read-more-show, .read-more-hide').removeClass('hide_content')

      // Set up the toggle effect:
      $('.read-more-show').on('click', function(e) {
         $(this).next('.read-more-content').removeClass('hide_content');
         $(this).addClass('hide_content');
         e.preventDefault();
      });

      // Changes contributed by @diego-rzg
      $('.read-more-hide').on('click', function(e) {
         var p = $(this).parent('.read-more-content');
         p.addClass('hide_content');
         p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
         e.preventDefault();
      });
   </script>
   <!-- read more button end in database -->

   <!-- form submit when change select option -->
   <script type="text/javascript">
      var select = document.getElementById('client_id');
      select.onchange = function() {
         this.form.submit();
      };
   </script>
   <script type="text/javascript">
      $.ajaxSetup({
         headers: {
            'csrftoken': '{{ csrf_token() }}'
         }
      });
   </script>
   <!-- jQuery 3 -->
   <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="{{asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
      $.widget.bridge('uibutton', $.ui.button);
   </script>
   <!-- Bootstrap 3.3.7 -->
   <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   <!-- Morris.js charts -->
   <script src="{{asset('bower_components/raphael/raphael.min.js')}}"></script>
   <script src="{{asset('bower_components/morris.js/morris.min.js')}}"></script>
   <!-- Sparkline -->
   <script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
   <!-- jvectormap -->
   <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
   <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
   <!-- jQuery Knob Chart -->
   <script src="{{asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
   <!-- daterangepicker -->
   <script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
   <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
   <!-- datepicker -->
   <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
   <!-- Bootstrap WYSIHTML5 -->
   <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
   <!-- DataTables -->
   <script src="{{asset('/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
   <!-- Slimscroll -->
   <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
   <!-- FastClick -->
   <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
   <!-- AdminLTE App -->
   <script src="{{asset('js/adminlte.min.js')}}"></script>
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="{{asset('js/pages/dashboard.js')}}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="{{asset('js/demo.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
   <!-- SweetAlert2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

         // Master checkbox toggle
         $(document).on('click', '#master', function() {
            var isChecked = $(this).is(':checked');
            $('.sub_chk').prop('checked', isChecked);
         });

         // Check if all sub_chk are checked to update master checkbox
         $(document).on('change', '.sub_chk', function() {
            var total = $('.sub_chk').length;
            var checked = $('.sub_chk:checked').length;
            if (total > 0 && total === checked) {
               $('#master').prop('checked', true);
            } else {
               $('#master').prop('checked', false);
            }
         });

         // Bulk delete action with proper validation alerts
         $(document).on('click', '.delete_all', function(e) {
            e.preventDefault();
            var $button = $(this);
            var deleteUrl = $button.data('url');
            var allVals = [];

            $('.sub_chk:checked').each(function() {
               var id = $(this).attr('data-id');
               if (id) {
                  allVals.push(id);
               }
            });

            // Validation: No rows selected
            if (allVals.length <= 0) {
               if (typeof Swal !== 'undefined') {
                  Swal.fire({
                     icon: 'warning',
                     title: 'No Records Selected',
                     text: 'Please select at least one record using the checkbox to delete.',
                     confirmButtonColor: '#3c8dbc'
                  });
               } else {
                  alert('Please select at least one record to delete.');
               }
               return;
            }

            // Confirmation message with item count
            var count = allVals.length;
            var confirmText = 'Are you sure you want to delete ' + count + ' selected record' + (count > 1 ? 's' : '') + '? This action cannot be undone.';

            var performDelete = function() {
               var join_selected_values = allVals.join(',');
               var token = $('meta[name="csrf-token"]').attr('content');

               $.ajax({
                  url: deleteUrl,
                  type: 'DELETE',
                  headers: {
                     'X-CSRF-TOKEN': token
                  },
                  data: {
                     ids: join_selected_values,
                     _token: token
                  },
                  success: function(data) {
                     if (data && data.success) {
                        var refreshTable = function() {
                           var url = new URL(window.location.href);
                           var page = parseInt(url.searchParams.get('page'));
                           var isAllOnPageSelected = ($('.sub_chk:checked').length >= $('.sub_chk').length && $('.sub_chk').length > 0);
                           if (isAllOnPageSelected && page && page > 1) {
                              url.searchParams.set('page', page - 1);
                              window.location.href = url.toString();
                           } else {
                              window.location.reload();
                           }
                        };

                        if (typeof Swal !== 'undefined') {
                           Swal.fire({
                              icon: 'success',
                              title: 'Deleted!',
                              text: data.success,
                              timer: 1500,
                              showConfirmButton: false
                           }).then(function() {
                              refreshTable();
                           });
                        } else {
                           alert(data.success);
                           refreshTable();
                        }
                     } else if (data && data.error) {
                        if (typeof Swal !== 'undefined') {
                           Swal.fire({
                              icon: 'error',
                              title: 'Error',
                              text: data.error
                           });
                        } else {
                           alert(data.error);
                        }
                     } else {
                        var defaultMsg = 'Something went wrong while deleting records.';
                        if (typeof Swal !== 'undefined') {
                           Swal.fire({
                              icon: 'error',
                              title: 'Error',
                              text: defaultMsg
                           });
                        } else {
                           alert(defaultMsg);
                        }
                     }
                  },
                  error: function(xhr) {
                     var errorMsg = 'Failed to delete records. Please try again.';
                     if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMsg = xhr.responseJSON.error;
                     } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMsg = xhr.responseJSON.message;
                     }
                     if (typeof Swal !== 'undefined') {
                        Swal.fire({
                           icon: 'error',
                           title: 'Error',
                           text: errorMsg
                        });
                     } else {
                        alert(errorMsg);
                     }
                  }
               });
            };

            if (typeof Swal !== 'undefined') {
               Swal.fire({
                  title: 'Are you sure?',
                  text: confirmText,
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#d9534f',
                  cancelButtonColor: '#6c757d',
                  confirmButtonText: 'Yes, delete selected!',
                  cancelButtonText: 'Cancel'
               }).then(function(result) {
                  if (result.isConfirmed) {
                     performDelete();
                  }
               });
            } else {
               if (confirm(confirmText)) {
                  performDelete();
               }
            }
         });
      });
   </script>
</body>

</html>