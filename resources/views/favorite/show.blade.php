@extends('layouts.app')

@section('template_title')
    {{ $favorite->name ?? "{{ __('Show') Favorite" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Favorite</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favorite.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Movie:</strong>
                            {{ $favorites->id_movie }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $favorites->id_user }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
