@extends('twofactor::layout')

@section('card-body')
    <p class="text-center">
        {{ trans('twofactor::messages.enable') }}
    </p>
    @isset($url)
    <div class="col-auto mb-3">
        <a href="{{ $url }}" class="btn btn-primary btn-lg">
            {{ trans('twofactor::messages.switch_on') }} &raquo;
        </a>
    </div>
    @endisset
@endsection
