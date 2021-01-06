@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justifly-content-between">
        <a href="{{ route('role.index') }}" class="btn btn-info rounded">All Role</a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create A New Role</h4>
        </div>

        <div class="card-body">
            <form action="{{route('role.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" required>
                    <label class="form-control-placeholder" for="name">Name</label>
                    <span class="focus-border"></span>
                </div>               
                <button type="submit" class="btn btn-primary btn-block rounded">Save</button>
            </form>
        </div>
    </div>

    <style>
        #roles.custom-select{
            width: 9%;
        }
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
