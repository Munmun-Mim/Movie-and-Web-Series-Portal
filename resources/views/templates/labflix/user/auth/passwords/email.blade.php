@extends($activeTemplate.'layouts.frontend')
@section('content')
<section class="pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-5 mx-auto">
                <div class="card custom--card">
                    <div class="card-header">
                        <h5 class="title text-center">{{ __($pageTitle) }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <p>@lang('To recover your account please provide your email or username to find your
                                account.')</p>
                        </div>
                        <form method="POST" action="{{ route('user.password.email') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">@lang('Email or Username')</label>
                                <input type="text" class="form-control form--control" name="value"
                                    value="{{ old('value') }}" required autofocus="off">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="cmn-btn w-100">@lang('Submit')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
