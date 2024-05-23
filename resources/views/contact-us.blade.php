<x-layout>
    <section class="hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We will write you back as soon as possible!</p>
        </div>
    </section>
   
    <div class="add-container">
        @if (session()->has('success'))
        <div class="success-message" role="alert">
            {{session('success')}}    
        </div>
        @endif 
        <form action={{route('contact-success')}} method="post">
            @csrf
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="name" required>
            </div>
        
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="surname" required>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
        
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="description" rows="4" required></textarea>
            </div>
        
            <input type="submit" value="Submit">
        </form>
    </div>
    
</x-layout>