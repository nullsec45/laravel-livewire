<div class="row">
    <div class="col-lg-6">
        Showing {{$items->firstItem()}} to {{$items->lastItem()}} out of {{$items->total()}} items.
    </div>

    <div class="col-lg-6">
        {{$items->links()}}
    </div>
</div>