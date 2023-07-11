@extends('layouts.app')

@section('template_title')
    Movie
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movie') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movie.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>

										<th>Title</th>
										<th>Description</th>
										<th>Duration</th>
										<th>Director</th>
										<th>Year</th>
										<th>Url</th>
										<th>Important</th>
										<th>Id Category</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movie as $movies)
                                        <tr>

											<td>{{ $movies->title }}</td>
											<td>{{ $movies->description }}</td>
											<td>{{ $movies->duration }}</td>
											<td>{{ $movies->director }}</td>
											<td>{{ $movies->year }}</td>
											<td>{{ $movies->url }}</td>
											<td>{{ $movies->important }}</td>
											<td>{{ $movies->id_category }}</td>

                                            <td>
                                                <form action="{{ route('movie.destroy',$movies->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movie.show',$movies->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movie.edit',$movies->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
