@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Subscriptions</div>
                    <div class="panel-body">

                        {!! Form::open(['method' => 'GET', 'url' => '/App/subscriptions', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                           
                            <a href="{{route('downloadExcel')}}" class="btn btn-primary">Export Excel</a>
                           
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Title</th><th>Full Name</th><th>Email</th><th>Mobile</th>
                                        <th>Email/Phone</th><th>Source</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sattalites as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->contact_type }}</td>
                                        <td>{{ $item->source }}</td> 
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $sattalites->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
