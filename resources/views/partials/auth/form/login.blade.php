<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">
        <label>
            Email Address
        </label>
        <input class="au-input au-input--full" type="email" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required autofocus>
    </div>

    @error('email')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label>
            Password
        </label>
        <input class="au-input au-input--full" type="password" name="password" value="{{ old('password') }}" placeholder="******" required autofocus>
    </div>
    
    @error('password')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="login-checkbox">
        <label>
            <input type="checkbox" name="remember">
            Remember Me
        </label>
    </div>

    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
        sign in
    </button>
</form>