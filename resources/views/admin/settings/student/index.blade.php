@extends('layouts.index')
@section('content')


    <div class="pagetitle">
      <h1>Students</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Students</li>
        </ol>
      </nav>
    </div>

    <div class="d-flex justify-content-end my-2">
        <a href="{{ route('admin.students.create') }}" class="btn btn-success">Add Student</a>
    </div>

    <section class="section">
        <div class="row">
          <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Datatables</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>
                        Student ID</th>
                      <th>Name</th>
                      <th>Sex</th>
                      <th >Course</th>
                      <th>Campus</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                      <td>{{ $student->firstname }} {{ $student->last_name }}</td>
                      <td>{{ $student->sex }}</td>
                      <td>{{ $student->course->courses }}</td>

                    <td>{{ $student->campus?->campus_name ?? "No Data"}}</td>
                      <td></td>
                    </tr>
                    @empty
                        <tr>
                            <td>No Data</td>
                        </tr>
                    @endforelse

                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>
            </div>

          </div>
        </div>
      </section>

    @endsection
