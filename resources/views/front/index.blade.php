@extends('layouts.front')

@section('title', 'Roman Numeral Converter')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ __('Error') }}: {{ session('error') }}
                </div>
            @endif

            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">{{ trans('pages.index_title') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @include('front._form')
                            </div>
                            <div class="col-md-6 border-1 border-start">
                                @if(isset($roman))
                                    @include('front._result', ['roman' => $roman])
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
