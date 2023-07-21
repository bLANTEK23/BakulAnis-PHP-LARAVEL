<div class="d-flex">
    <a href="{{ url("/recap/$model->id_rekap/edit") }}" class="mt-2">
        <button type="button" class="btn btn-primary">
            <i class="fa fa-pencil mr-1"></i> Ubah
        </button>
    </a>
    <form action="{{ url("/recap/$model->id_rekap") }}" method="POST" class="ml-1">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-2">
            <i class="fa fa-trash mr-1"></i> Hapus
        </button>
    </form>
</div>

