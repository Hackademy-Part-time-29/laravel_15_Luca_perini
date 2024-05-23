<header>
    <nav>
        <div class="nav-container">
            <div class="logo">
                <h1>{{env('app_NAME')}}</h1>
            </div>
            <ul class="nav-links">
                <li><a href={{route('welcome')}}>Home</a></li>
                <li><a href={{route('articles')}}>Articles</a></li>
                <li><a href={{route('contact-us')}}>Contact Us</a></li>
            </ul>
            @auth
            <div class="user-section">
                <div class="user-avatar"></div>
                <div class="dropdown">
                    <button class="dropbtn">Welcome back, {{auth()->user()->name}}!</button>
                    <div class="dropdown-content">
                        <a href="#" onclick="
                            event.preventDefault();
                            getElementById('form-logout').submit()">Logout</a>
                        <form id="form-logout" action="logout" method="POST">
                            @csrf
                            <li><a href={{route('categories.index')}}>Categories</a></li>
                            <li><a href={{route('add-article')}}>+Add Article</a></li>
                            <li><a href={{route('categories.create')}}>+Add Category</a></li>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <ul class="nav-links">
                <li><a href={{route('register')}}>Register</a></li>
                <li><a href={{route('login')}}>Login</a></li>
               
            </ul> 
            @endauth
        </div>
    </nav>
</header>