<x-layout>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="register" method="POST" id="registration-form">

            @csrf 

            <div class="form-group">
                <label for="username">Username:</label>
                <input value="{{old('username')}}" id="username" name="username" required>
                @error('username')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input value="{{old('email')}}" type="email" id="email" name="email" required>
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="password_confirmation" required>
                @error('password_confirmation')
                <p>{{$message}}</p>
                @enderror
            </div>
            <button class="button-link" type="submit">Register</button>
        </form>
    </div>
</x-layout>