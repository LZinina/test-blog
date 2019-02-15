  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        @if (Auth::check())
          <a class="p-2 text-muted" href="#">{{Auth::user()->name}}</a>
        @endif
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a>
        
        <a class="btn btn-sm btn-outline-secondary mr-3" href="/register">Register</a>
        <a class="btn btn-sm btn-outline-secondary mr-3" href="/login">Sign in</a>
        <a class="btn btn-sm btn-outline-secondary" href="/logout">Sign out</a>
      </div>
    </div>
  </header>