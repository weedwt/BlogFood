@extends('backpanel.layouts.master')
@section('content')
    @if (session('success'))
        <div class="alert alert-info">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justifly-content-between">
        <a href="{{ route('user.create') }}" class="btn btn-success rounded">Create User</a>
    </div>
    {{-- <h2>All Users</h2> --}}

    <div class="card">
        <div class="card-header card-header-warning">
            <h4 class="card-title">All User</h4>
        </div>
        <div class="card-body">
            <table class="table tavle-hover">
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                @forelse ($users as $user)
                    <tr>
                        <td>
                            <img src="{{$user->avatar}}" alt="{{$user->name}}" width="75px">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles[0]->name}}</td>
                        <td align="right">
                            <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-warning btn-sm rounded">
                                <i class="material-icons">edit</i>
                                Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('user.destroy', [$user->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded">
                                        <i class="material-icons">delete</i>
                                        Delete
                                    </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No users found</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
