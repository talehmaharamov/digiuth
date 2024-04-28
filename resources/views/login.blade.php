@extends('layouts.app')

@section('title', __('third.login'))

@section('content')
<section class="form-section">
    <form class="digiuth_form pt-80" id="digiuth_login" method="post" action="{{route('post.login')}}">
        @csrf
        <div class="form-group">
            @if(\Illuminate\Support\Facades\Lang::has('third.email_or_username'))
            <label for="email">{{ __('third.email_or_username') }}</label>
            @endif
            <input class="form-control" type="text" name="email" id="email" placeholder="{{__('third.email_or_username')}}">
        </div>
        @error('email')
        <br>
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
            @if(\Illuminate\Support\Facades\Lang::has('third.login_password'))
            <label for="password">{{ __('third.login_password') }}</label>
            @endif
            <input class="form-control"
                   type="password"
                   name="password"
                   id="password"
                   placeholder="{{__('third.login_password')}}">
            <span class="show-password">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                    </svg>
                </span>
        </div>
        @error('password')
        <br>
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <div class="error-message">
            @if(session()->has('error'))
            <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
        </div>

        @if(\Illuminate\Support\Facades\Lang::has('third.sign-in'))
        <button type="submit" class="btn btn-success">
            {{ __('third.sign-in') }}
        </button>
        @else

        @endif

        {{--
        <div class="form-btns pt-20">--}}
            {{--
            <button type="submit" class="btn-c login-submit-btn">Login</button>
            --}}
            {{--
        </div>
        --}}

        <div class="login-form-footer pt-15">
            @if(\Illuminate\Support\Facades\Lang::has('third.register_as_teacher'))
            <a href="{{route('login.teacher')}}">{{ __('third.register_as_teacher') }}</a>
            @endif
            @if(\Illuminate\Support\Facades\Lang::has('third.register_as_student'))
            <a href="{{route('login.student')}}">{{ __('third.register_as_student') }}</a>
            @endif
            @if(\Illuminate\Support\Facades\Lang::has('third.forgot_password'))
            <a href="{{route('forgot.password')}}">{{ __('third.forgot_password') }}</a>
            @endif
        </div>
    </form>
</section>
@endsection


@section('js')
<script>
    $('.show-password').on('click', function () {
        let type = $('#password').attr('type')
        if (type === 'password') {
            $('.show-password svg:first').addClass('d-none')
            $('.show-password svg:last').removeClass('d-none')
        } else {
            $('.show-password svg:last').addClass('d-none')
            $('.show-password svg:first').removeClass('d-none')
        }
        $('#password').attr('type', type === 'password' ? 'text' : 'password')
    })
</script>
@endsection