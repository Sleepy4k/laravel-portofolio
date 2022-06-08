<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="form-group">
        <label>
            Name
        </label>
        <input class="au-input au-input--full" type="text" name="name" value="{{ old('name') }}" placeholder="Benjamin4k" required autofocus>
    </div>

    @error('name')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

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
        <input class="au-input au-input--full" type="password" name="password" placeholder="*******" required autofocus>
    </div>

    @error('password')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label>
            Password Confirmation
        </label>
        <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="*******" required autofocus>
    </div>

    @error('password_confirmation')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="login-checkbox">
        <label>
            <input type="checkbox" name="aggree">
                Agree the terms and policy
            </input>
        </label>
    </div>
    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
        register
    </button>
</form>