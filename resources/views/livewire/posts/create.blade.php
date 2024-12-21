<div class="card">
   <div class="card-body">
        <h5 class="card-title">New Post</h5>
        <form wire:submit="save">
            <div class="mb-4">
                <label for="body" class="form-label">Title</label>
                <input type="text" class="form-control" wire:model="title" class="form-control" id="title" rows="3">
                @error('title')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="form-label">Body</label>
                <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                @error('body')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button class="btn btn-success">
                Save
            </button>
        </form>
   </div>
</div>
