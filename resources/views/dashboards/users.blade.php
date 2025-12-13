@extends('layout.main')
@section('dashboard')
<body>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              @if(auth()->user()->photo == null)
                <img src="https://corporateofficeheadquarters.org/wp-content/uploads/2021/05/Sam-Richman-1536x1536.jpg" alt="Profile" class="rounded-circle">
              @else  
                <img src="{{ asset('storage/'.str_replace('public/', '', auth()->user()->photo)) }}" alt="Profile" style="max-width: 400px;">
              @endif
              <h2>{{ auth()->user()->username }}</h2>
            </div>
          </div>
        </div>

        
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация табов
    var triggerTabList = [].slice.call(document.querySelectorAll('#profileTab button'));
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl);
        
        triggerEl.addEventListener('click', function (event) {
            event.preventDefault();
            tabTrigger.show();
        });
    });
});
</script>
@endpush
  </main><!-- End #main -->
@endsection