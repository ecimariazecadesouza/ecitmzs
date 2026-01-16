@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            @include('layouts.left-menu')
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl-10">
                <div class="row pt-2">
                    <div class="col ps-4">
                        <h1 class="display-6 mb-3">
                            <i class="bi bi-pencil-square"></i> Edit Semester
                        </h1>

                        @include('session-messages')

                        <div class="p-3 border bg-light shadow-sm">
                            <form action="{{ route('school.semester.update', $semester->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="session_id" value="{{ $semester->session_id }}">

                                <div class="mt-2">
                                    <p>Semester name<sup><i class="bi bi-asterisk text-primary"></i></sup></p>
                                    <input type="text" class="form-control form-control-sm" name="semester_name"
                                        value="{{ $semester->semester_name }}" required>
                                </div>

                                <div class="mt-2">
                                    <label for="inputStarts" class="form-label">Starts<sup><i
                                                class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="date" class="form-control form-control-sm" id="inputStarts"
                                        name="start_date" value="{{ $semester->start_date }}" required>
                                </div>

                                <div class="mt-2">
                                    <label for="inputEnds" class="form-label">Ends<sup><i
                                                class="bi bi-asterisk text-primary"></i></sup></label>
                                    <input type="date" class="form-control form-control-sm" id="inputEnds" name="end_date"
                                        value="{{ $semester->end_date }}" required>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-check2"></i>
                                        Update</button>
                                    <a href="{{ url('academics/settings') }}" class="btn btn-sm btn-secondary"><i
                                            class="bi bi-x"></i> Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
@endsection