<div>
    <x-flash-message/>
    <div class="card">
        <div class="card-body">
                <h5 class="card-title">New Post</h5>
                <form wire:submit="save">
                    <div class="mb-4">
                        <label for="body" class="form-label">Title</label>
                        <input type="text" class="form-control" wire:model="postForm.title" class="form-control" id="title" rows="3">
                        @error('postForm.title')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="body" class="form-label">Body</label>
                        <textarea wire:model="postForm.body" class="form-control" id="body" rows="3"></textarea>
                        @error('postForm.body')
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
</div>