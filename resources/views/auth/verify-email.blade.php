<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Verifica la tua E-Mail</h1>
        </div>
        @if(session('status') == 'verification-link-sent')
        <div class="success-message" role="alert">
            A new email verification has been sent to you!
        </div>
        @endif
    </section>
    <div class="container">
        <form id="registration-form" action="/login" method="post">
            @csrf
            <button class="btn-create" type="submit">Invia E-Mail</button><br>
    </div>
</x-layout>