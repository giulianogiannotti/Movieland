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
                            {{ $movies->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $movies->description }}
                        </div>
                        <div class="form-group">
                            <strong>Duration:</strong>
                            {{ $movies->duration }}
                        </div>
                        <div class="form-group">
                            <strong>Director:</strong>
                            {{ $movies->director }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $movies->year }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $movies->url }}
                        </div>
                        <div class="form-group">
                            <strong>Important:</strong>
                            {{ $movies->important }}
                        </div>
                        <div class="form-group">
                            <strong>Id Category:</strong>
                            {{ $movies->id_category }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
