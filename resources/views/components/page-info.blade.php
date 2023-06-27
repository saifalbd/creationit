<div class="row no-gutters">
    <div class="col-4" style="display: flex;justify-content:flex-end;align-items:center;">
        Showing {{$items->firstItem()}} to {{$items->lastItem()}} of {{$items->total()}} entries
    </div>
    <div class="col-8" style="display: flex;justify-content:flex-end;">
        {{ $items->onEachSide(5)->links() }}
    </div>
</div>