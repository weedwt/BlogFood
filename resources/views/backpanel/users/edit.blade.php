@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justifly-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-info rounded">All User</a>
    </div>
    <div class="card">
        <div class="card-header card-header-warning">
            <h4 class="card-title">Edit " {{$user->name}} "</h4>
        </div>
        <div class="card-body">
            <form action="{{route('user.update', [$user->id])}}" method="post">
                @csrf
                @method('PUT');
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    <label class="form-control-placeholder" for="name">Name</label>
                    <span class="focus-border"></span>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    <label class="form-control-placeholder" for="email">Email</label>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select id="roles" name="role_id" class="custom-select">
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}" @if($role->id === $user->role_id) selected @endif>{{$role->name}}</option>                        
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-warning btn-block rounded">Update</button>
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
