<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Forgot your Password?</h1>
            <p>Reset it here:</p>
        </div>
    </section>
    <div class="container">
        @if(session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}
        </div>
        @endif
        <form id="registration-form" action="{{route('password.email')}}" method="post">
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

          <button type="submit" class="btn-create">Reset your Password:</button>
        </form>
    </div>
</x-layout>