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
            <form action="{{ route('employe.store') }}" method="post">
              @csrf
              <div class="card-header">
                <h4>Add New Data employe</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                  @if ($errors->has('name'))
                    <div class="invalid-feedback">
                      {{ $errors->first('name') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                  @if ($errors->has('email'))
                    <div class="invalid-feedback">
                      {{ $errors->first('email') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input name="phone" type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                  @if ($errors->has('phone'))
                    <div class="invalid-feedback">
                      {{ $errors->first('phone') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Salary</label>
                  <input name="salary" type="text" class="form-control {{ $errors->has('salary') ? ' is-invalid' : '' }}">
                  @if ($errors->has('salary'))
                    <div class="invalid-feedback">
                      {{ $errors->first('salary') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"></textarea>
                  @if ($errors->has('address'))
                    <div class="invalid-feedback">
                      {{ $errors->first('address') }}
                    </div>
                  @endif
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
