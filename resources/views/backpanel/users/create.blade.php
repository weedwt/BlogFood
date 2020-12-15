@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justifly-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All User</a>
    </div>
    {{-- <h3 class="text center">Create A New User</h3> --}}
    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Create A New User</h4>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <input type="text" id="name" class="form-control" required>
                    <label class="form-control-placeholder" for="name">Name</label>
                    <span class="focus-border"></span>
                </div>
                <div class="form-group">
                    <input type="email" id="email" class="form-control" required>
                    <label class="form-control-placeholder" for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" required>
                    <label class="form-control-placeholder" for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Save</button>
                test
            </form>
        </div>
    </div>

    <style>
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-control-placeholder {
            position: absolute;
            top: 0;
            transition: all 200ms;
        }

        .form-control:focus+.form-control-placeholder,
        .form-control:valid+.form-control-placeholder {
            font-size: 80%;
            transform: translate3d(0, -100%, 0);
            color: #6D22AF;
        }
    </style>


@endsection
