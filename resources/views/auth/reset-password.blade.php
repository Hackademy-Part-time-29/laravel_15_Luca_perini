<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Reset your Password here:</h1>
        </div>
    </section>
    <div class="container">
        @if(session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form id="registration-form" action="/reset-password" method="post">
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
            <input type="hidden" name="token" value="{{request()->route('token')}}">
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
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password_confirmation">
                @error('password')
                <div class="fail-message">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button class="btn-create" type="submit">Reset your Password</button><br>

        </form>
    </div>
</x-layout>