@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justifly-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-info rounded">All User</a>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Create A New User</h4>
        </div>

        <div class="card-body">
            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" required>
                    <label class="form-control-placeholder" for="name">Name</label>
                    <span class="focus-border"></span>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" required>
                    <label class="form-control-placeholder" for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" required>
                    <label class="form-control-placeholder" for="password">Password</label>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select id="roles" name="role_id" class="custom-select">
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{strtoupper($role->name)}}</option>                        
                        @endforeach
                    </select>
                </div>

                    <label for="avatar">Image</label>
                    <input type="file" name="avatar" id="avatar">

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
