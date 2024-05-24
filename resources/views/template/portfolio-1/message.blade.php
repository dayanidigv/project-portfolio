@extends('layout.portfolio')
@section('main')
<section class="home-area">
        <div class="container">
          <div class="row g-4">
            <div class="col-xl-12">
              <div class=" profile-card">
                <div class="card-body">
                  <div class="text">
                    <h3 class="card-title">Hello {{$user->name}}👋</h3>
                    <p>{!! $user->message !!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection