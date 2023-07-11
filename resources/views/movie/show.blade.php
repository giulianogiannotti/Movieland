@extends('layouts.app')

@section('template_title')
    {{ $movie->name ?? "{{ __('Show') Movie" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Movie</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movie.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $movie->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $movie->description }}
                        </div>
                        <div class="form-group">
                            <strong>Duration:</strong>
                            {{ $movie->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Director:</strong>
                            {{ $movie->director }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $movie->year }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $movie->url }}
                        </div>
                        <div class="form-group">
                            <strong>Important:</strong>
                            {{ $movie->important }}
                        </div>
                        <div class="form-group">
                            <strong>Id Category:</strong>
                            {{ $movie->id_category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
