<div>
    <div class="row">
        <div class="col-lg-6">
            <livewire:posts.create/>
        </div>
        <div class="col-lg-6">
            @foreach($posts as $post)
                <livewire:posts.block :post="$post" wire:key="{{$post->id}}"/>
            @endforeach
        </div>
    </div>
</div>
