<div>
            <x-flash-message/>
            <div class="card">
                <div class="card-body">
                        <form wire:submit="save">   
                            <div class="mb-2">
                                <label for="body" class="visually-hidden">Body</label>
                                <textarea placeholder="What's on your mind ?" wire:model="postForm.body" class="form-control" id="body" rows="3"></textarea>
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