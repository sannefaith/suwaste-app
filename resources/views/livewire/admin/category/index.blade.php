<div>
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Item Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            <form wire:submit.prevent="destroyItem">
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
        <h3>WASTE CATEGORIES
                <a href="{{ url('admin/wasteitem/create') }}" class="btn btn-primary btn-sm float-end">New Category</a>
        </h3>
    </div>
    <div class="card-body">
   <table class="table table-boardered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>POINTS</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($wasteitems as $wasteitem)
        <tr>
            <td>{{ $wasteitem->item_id }}</td>
            <td>{{ $wasteitem->item_name }}</td>
            <td>{{ $wasteitem->points }}</td>
            <td>
                <a href="{{ url('admin/wasteitem/'. $wasteitem->item_id.'/edit') }}" class="btn btn-success">Edit</a>
                <a href="#" wire:click="deleteitemr({{ $watseitemr->item_id}})" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>
   {{ $wasteitems->links() }}
</div>
</div>
</div>
@push ('script')
@endpush