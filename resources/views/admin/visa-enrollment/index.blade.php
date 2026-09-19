@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>Visa Enrollments</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/admin/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Visa Enrollments</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body" style="overflow-x:auto;margin-top:15px">
            @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Country</th>
                  <th>Course</th>
                  <th>Course Date</th>
                  <th>Batch</th>
                  <th>Submitted</th>
                </tr>
              </thead>
              <tbody>
                @forelse($enrollments as $enrollment)
                <tr>
                  <td>
                    <a href="{{ route('admin.visa-enrollment.destroy', $enrollment->id) }}" onclick="return confirm('Sure! You want to delete this enrollment?');">
                      <i class="fa fa-trash" style="color:white;font-size:15px;background-color:red;padding:8px;border-radius:200px;"></i>
                    </a>
                  </td>
                  <td>{{ $enrollment->name }}</td>
                  <td>{{ $enrollment->email }}</td>
                  <td>{{ $enrollment->phone }}</td>
                  <td>{{ ucfirst(str_replace('-', ' ', $enrollment->country)) }}</td>
                  <td>{{ $enrollment->course }}</td>
                  <td>{{ optional($enrollment->course_date)->format('d M Y') }}</td>
                  <td>{{ ucfirst($enrollment->batch) }}</td>
                  <td>{{ $enrollment->created_at->format('d M Y H:i') }}</td>
                </tr>
                @empty
                <tr>
                  <td colspan="9" class="text-center">No visa enrollments found.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
            <div class="row mt-4">
              <div class="col-sm-12" style="display:flex;justify-content:center;">
                {{ $enrollments->links('pagination::bootstrap-4') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection