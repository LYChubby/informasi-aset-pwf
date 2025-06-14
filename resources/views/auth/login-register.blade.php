<x-app-layout>
    @push('styles')
        @vite(['resources/css/auth/login-register.css'])
    @endpush

    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container" id="container">
        <!-- Sign Up Form -->
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}" id="signup-form">
                @csrf
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                
                <input type="text" name="name" id="signup-username" placeholder="Name" value="{{ old('name') }}" required autofocus />
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
                
                <input type="email" name="email" id="signup-email" placeholder="Email" value="{{ old('email') }}" required />
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                
                <input type="password" name="password" id="signup-password" placeholder="Password" required autocomplete="new-password" />
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
                
                <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required />

                
                <button type="submit">Sign Up</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}" id="login-form">
                @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                
                <input type="email" name="email" id="login-email" placeholder="Email" value="{{ old('email') }}" required autofocus />
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                
                <input type="password" name="password" id="login-password" placeholder="Password" required autocomplete="current-password" />
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
                
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
                
                <button type="submit">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        @vite(['resources/js/auth/login-register.js'])
    @endpush
</x-app-layout>