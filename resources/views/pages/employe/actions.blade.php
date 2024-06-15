<a href="{{ route('employe.show', $data->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
<a href="{{ route('employe.edit', $data->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
<form action="{{ route('employe.destroy', $data->id) }}" method="POST" style="display:inline;">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger"><a class="btn-btn-danger"><i class="fas fa-trash"></i></a></button>
</form>
