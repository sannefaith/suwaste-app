<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <form wire:submit.prevent="destroyUser">
                <div class="modal-body">
                    <h6>Are you sure you want to delete this data?</h6>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes. Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    @if(session('message'))
    <div class="alert alert-success">
    <h6>{{ session('message') }}</h6>
    </div>
    @endif
    <div class="card">
        <div class="card-hearder">
            <h3>USERS
                    <a href="{{ url('admin/user/create') }}" class="btn btn-primary btn-sm float-end">Add User</a>
            </h3>
        </div>
        <div class="card-body">
                <table class="table table-boardered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LAST NAME</th>
                        <th>FIRST NAME</th>
                        <th>EMAIL</th>
                        <th>FACULTY</th>
                        <th>YEAR</th>
                        <th>ROLE_ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->student_id }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->first_name}}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->faculty }}</td>
                        <td>{{ $user->year }}</td>
                        <td>{{ $user->role_id }}</td>
                        <td>
                            <a href="{{ url('admin/user/'.$user->student_id.'/edit') }}" class="btn btn-success">Edit</a>
                            <a href="#" wire:click="deleteUser({{ $user->student_id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                 {{ $users->links() }}
         </div>
</div>
@push ('script')
@endpush


