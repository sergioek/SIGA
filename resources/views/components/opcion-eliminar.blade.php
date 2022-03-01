<div>
    <td class="collapse" id="Options" title="Eliminar">
        <form action="{{$href}}" method="post">
            @method('delete')
            @csrf
            <a>
            <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </a>
        </form>
    </td>
</div>