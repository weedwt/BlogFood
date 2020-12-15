@extends('backpanel.layouts.master')
@section('content')
    <div class="d-flex justifly-content-between">
    <a href="{{route('user.create')}}" class="btn btn-primary rounded">Create User</a>
    </div>
    {{-- <h2>All Users</h2> --}}
   <div class="card">
       <div class="card-header card-header-warning">
            <h4 class="card-title">All User</h4>
       </div>
        <div class="card-body">
            <table class="table tavle-hover">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @forelse ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>Admin</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm rounded">
                                <i class="material-icons">edit</i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-danger btn-sm rounded">
                                <i class="material-icons">delete</i>
                                Delete
                            </a>
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
