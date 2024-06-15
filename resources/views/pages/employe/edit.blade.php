@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="section-header">
      <h1>employe</h1>

    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form action="{{ route('employe.update', $employe->id) }}" method="post">
              @csrf
              @method('put')
              <div class="card-header">
                <h4>Edit Data employe</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input name="name" type="text" value="{{ $employe->name }}" class="form-control">
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" value="{{ $employe->email }}" class="form-control">
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input name="phone" type="text" value="{{ $employe->phone }}" class="form-control">
                  @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Salary</label>
                  <input name="salary" type="text" value="{{ $employe->salary }}" class="form-control">
                  @error('salary')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" class="form-control">{{ $employe->address }}</textarea>
                  @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
