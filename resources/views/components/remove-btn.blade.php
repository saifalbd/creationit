<form action="{{$action}}" method="post" title="{{$title}}" class="remove-form" style="padding: 0; margin:0">
    @csrf
    @method('delete')
    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash "> </i></button>
</form>