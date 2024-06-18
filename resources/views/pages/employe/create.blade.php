@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="section-header">
      <h1>Employe</h1>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <form id="employe-form" action="{{ route('employe.store') }}" method="post">
              @csrf
              <div class="card-header">
                <h4>Add New Data Employe</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                  @if ($errors->has('name'))
                    <div class="invalid-feedback">
                      {{ $errors->first('name') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                  @if ($errors->has('email'))
                    <div class="invalid-feedback">
                      {{ $errors->first('email') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input id="phone" name="phone" type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                  @if ($errors->has('phone'))
                    <div class="invalid-feedback">
                      {{ $errors->first('phone') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="salary">Salary</label>
                  <input id="salary" name="salary" type="text" class="form-control {{ $errors->has('salary') ? ' is-invalid' : '' }}">
                  @if ($errors->has('salary'))
                    <div class="invalid-feedback">
                      {{ $errors->first('salary') }}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea id="address" name="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}"></textarea>
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
@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('employe-form').addEventListener('submit', function(event) {
        let valid = true;
        const fields = ['name', 'email', 'phone', 'salary', 'address'];

        fields.forEach(function(field) {
          const input = document.getElementById(field);
          if (input.value.trim() === '') {
            input.classList.add('is-invalid');
            const feedback = document.createElement('div');
            feedback.classList.add('invalid-feedback');
            feedback.textContent = 'data ini tidak diperbolehkan spasi saja.';
            if (!input.nextElementSibling || !input.nextElementSibling.classList.contains('invalid-feedback')) {
              input.parentNode.appendChild(feedback);
            }
            valid = false;
          } else {
            input.classList.remove('is-invalid');
            if (input.nextElementSibling && input.nextElementSibling.classList.contains('invalid-feedback')) {
              input.nextElementSibling.remove();
            }
          }
        });

        if (!valid) {
          event.preventDefault();
        }
      });
    });
  </script>
@endpush
