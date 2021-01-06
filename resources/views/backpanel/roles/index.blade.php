@extends('backpanel.layouts.master')
@section('content')
    @if (session('success'))
        <div class="alert alert-info">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justifly-content-between">
        <a href="{{ route('role.create') }}" class="btn btn-success rounded">Create Role</a>
    </div>
    {{-- <h2>All Users</h2> --}}

    <div class="card">
        <div class="card-header card-header-warning">
            <h4 class="card-title">All Role</h4>
        </div>
        <div class="card-body">
            <table class="table tavle-hover">
                <tr>
                    <th>Name</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                @forelse ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td align="right">
                            <a href="{{ route('role.edit', [$role->id]) }}" class="btn btn-warning btn-sm rounded">
                                <i class="material-icons">edit</i>
                                Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('role.destroy', [$role->id]) }}" method="post">
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
                        <td colspan="4">No Role found</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
