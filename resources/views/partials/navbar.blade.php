<div class="blog-masthead" id="top">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/home">Home</a>	
            @if(Auth::check())
	            <a class="nav-link" href="/logout">Logout</a>
	            <a class="nav-link ml-auto" href="">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</a>
            @else
	            <a class="nav-link" href="/register">Sign up</a>
	            <a class="nav-link" href="/login">Login</a>
            @endif

            <form class="form-inline mt-2 mt-md-0" method="GET" action="/search">
                <input class="form-control mr-sm-2" type="text" placeholder="Filter" name="email">
                <button class="btn btn-outline-warning my-2 my-sm-0 ml-auto" type="submit">Filter by email</button>
            </form>

        </nav>
    </div>
</div>