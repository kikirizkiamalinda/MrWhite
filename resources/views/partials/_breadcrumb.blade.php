<nav class="navbar d-flex justify-content-between aria-label="breadcrumb" style="background-color: #D2D7D3;">
	<ol class="breadcrumb" style="background-color: #D2D7D3;">
	    {{ $slot }}
	</ol>
	<form class="form-inline" action="{{ route('search') }}">
    <input class="form-control mr-sm-2" type="search" name="search" id="search" value="{{ request()->input('search') }}" placeholder="Search for Products" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
