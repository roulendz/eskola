@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Create new Course</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::open(['url' => 'courses']) !!}
                            <div class="form-group">

                                {!! Form::label('title', 'Title:') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}

                            </div>
                            <!--- Body Form Inout Field --->
                            <div class="form-group">
                                {!! Form::label('body', 'Description:') !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>

                            <!--- Submit Course Field --->
                            <div class="form-group">
                                {!! Form::submit('Add new course to Course list', ['class' => 'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

