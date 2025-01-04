<div>
    <div class="col-lg-6">
        @foreach ($posts as $post )
            <p>{{$post->body}}</p>
        @endforeach
    </div>
</div>