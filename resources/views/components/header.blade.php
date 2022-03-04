<header>
    <h1>AkPhotos</h1>
    @guest
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Login
            </button>
            <div class="dropdown-menu">
                <form class="px-4 py-3" action="{{route('login')}}" method="POST">
                    @method("POST")
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="email@example.com">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"  placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                            Remember me
                        </label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="login" >
                </form>
                
            </div>
        </div>
    
    @endguest
    @auth
        {{-- <photo-component></photo-component> --}}
        <example-component></example-component>
        
        <div>
            <h3>Benvenuto {{Auth::user() -> name}} </h3>
            <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
        </div>
        
        
    @endauth

   

</header>