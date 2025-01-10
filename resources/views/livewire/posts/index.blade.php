<div>
    @foreach($posts as $post)
        <livewire:posts.block :post="$post" wire:key="{{$post->id}}" lazy/>
    @endforeach
</div>