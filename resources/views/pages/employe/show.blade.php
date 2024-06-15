@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="section-header">
      <h4>Detail Data Employe</h4>
    </div>
    <div class="section-body">
      <a href="{{ route('employe.index') }}" class="btn btn-outline-dark">
        <i class="fas fa-arrow-left"></i>
        back</a>
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-description pb-0">
              <div class="profile-widget-name">{{ $employe->name }}<div class="text-muted d-inline font-weight-normal">
                  <div class="slash"></div> {{ $employe->email }}
                </div>
              </div>
              <p>Salary : {{ $employe->salary }}</p>
              <p>Phone : {{ $employe->phone }}</p>
              <p>Address : {{ $employe->address }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
