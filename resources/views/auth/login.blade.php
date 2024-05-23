<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Already Registered?</h1>
            <p>Login here:</p>
        </div>
    </section>
    <div class="container">
        @if(session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form id="registration-form" action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{old('email')}}">
                @error('email')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                @error('password')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
            </div>

            <label>
                <input type="checkbox" id="remember-me" name="remember"> Remember Me
            </label>
            
            <button class="btn-create" type="submit">Login</button><br>
            <a href="{{route('password.request')}}">Forgot yout Password?</a>
        </form>
    </div>
</x-layout>