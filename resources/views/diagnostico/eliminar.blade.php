<div class="modal fade" id="eliminar-{{$diag->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('diagnostico.destroy', $diag->id) }}" method="POST">
        {{ method_field('DELETE') }}
		{{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Esta eliminando el diagnostico <b>{{ $diag->nombre }}</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Cofirmar</button>
            </div>
            </div>
        </div>
    </form>
</div>
