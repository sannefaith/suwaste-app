<div>
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reward Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <form wire:submit.prevent="destroyReward">
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
            <h3>REWARDS
                    <a href="{{ url('admin/reward/create') }}" class="btn btn-primary btn-sm float-end">New Reward</a>
            </h3>
        </div>
        <div class="card-body">
            <table class="table table-boardered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>POINTS</th>
                    <th>IMAGE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rewards as $reward)
                <tr>
                    <td>{{ $reward->reward_id }}</td>
                    <td>{{ $reward->reward_name }}</td>
                    <td>{{ $reward->points }}</td>
                    <td>
                    <img src="{{ asset('/assets/uploads/rewards/'.$reward->reward_image) }}" width="60px" height="60px" alt="">
            </td>
                    <td>
                        <a href="{{ url('admin/reward/'.$reward->reward_id.'/edit') }}" class="btn btn-success">Edit</a>
                        <a href="#" wire:click="deleteReward({{ $reward->reward_id }})" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    {{ $rewards->links() }}
    </div>
    </div>

@push ('script')
@endpush