@if (! Auth::check())
<div
    class="login-modal"
    role="dialog"
    aria-labelledby="Login_Modal_Title"
    aria-describedby="Login_Modal_Description"
    aria-hidden="true"
>
    <div class="login-modal__body">
        <div class="text-right">
            <button class="login-modal__close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="login-modal__content">
            {!! Form::open(['url' => '/login']) !!}
                <div class="form-group">
                    <h4 class="h5 login-modal__header text-right">
                        <label for="email" class="login-modal__header text-right" id="Login_Modal_Title">
                            Login
                            <i class="login-modal__icon fa fa-user-o" aria-hidden="true"></i>
                        </label>
                    </h4>
                    {!! Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'id' => 'email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::password('passphrase', ['placeholder' => 'A super  secret passphrase', 'class' => 'form-control', 'id' => 'passphrase']) !!}
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-link" href="/register" style="color: white;">Register</a>
                    <button type="submit" class="btn btn-inverse">Login</button>
                </div>
            {!! Form::close() !!}

            <p id="Modal_Description" class="visually-hidden">
                Login with your Francken account.
            </p>
        </div>
    </div>
</div>
@endif
