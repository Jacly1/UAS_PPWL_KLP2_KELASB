@extends('layouts.app')
@extends('layouts.backend')

@section('content')
<div class="card">
    <div class="card-header">Manage Roles</div>
    <div class="card-body">
        @can('create-role')
        <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Role</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Task Title</th>
                    <th scope="col">Assigned To</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->start_assigned_to }}</td>
                    <td>{{ $role->end_time }}</td>
                    <td>{{ $role->status }}</td>
                    <td>{{ $role->Action }}</td>
                    <td>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                            @if ($role->name != 'Super Admin')
                                @can('edit-role')
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                @endcan
                                @can('delete-role')
                                    @if ($role->name != Auth::user()->hasRole($role->name))
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this role?');"><i class="bi bi-trash"></i> Delete</button>
                                    @endif
                                @endcan
                            @endif
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">
                        <span class="text-danger">
                            <strong>No Role Found!</strong>
                        </span>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>
</div>
@endsection
