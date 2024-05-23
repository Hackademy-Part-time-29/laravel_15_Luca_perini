<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Don't have an Account?</h1>
            <p>Register to our {{env('app_NAME')}}!</p>
        </div>
    </section>
    <div class="container">
        @if(session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form id="registration-form" action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="name" value="{{old('name')}}">
                @error('name')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
            </div>
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
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="password_confirmation">
                @error('password_confirmation')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="btn-create" type="submit">Register</button>
        </form>
    </div>
</x-layout>