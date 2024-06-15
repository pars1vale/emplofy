@extends('layouts.app')
@push('styles')
  <link rel="stylesheet" href="{{ asset('dist/datatables/datatable.css') }}">
@endpush
@section('content')
  <div class="section">
    <div class="section-header">
      <h1>Users</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Data User</h4>
              <div class="card-header-action">
                <a href="{{ route('employe.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Add New Employe</a>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="table-responsive">
                {{ $dataTable->table() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
    <script src="{{ asset('dist/datatables/datatable.js') }}"></script>
    {{ $dataTable->scripts() }}
    <script>
      @if (session('success'))
        alert('{{ session('success') }}');
      @endif
    </script>
  @endpush
@endsection
