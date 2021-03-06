@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Edit: {!! $lesson->title !!}</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::model($lesson, ['method' => 'PATCH', 'action' => ['LessonsController@update', $lesson->id]]) !!}
                        <!--- Course Form Input --->
                        <div class="form-group">
                            {!! Form::label('Course', 'Course:') !!}
                            {!! Form::select('course_id', $courses, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('lesson_title', 'Title:') !!}
                            {!! Form::text('lesson_title', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Slug Form Input--->
                        <div class="form-group">
                            {!! Form::label('lesson_slug', 'URL:') !!}
                            {!! Form::text('lesson_slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Lesson Order Form Input--->
                        <div class="form-group">
                            {!! Form::label('lesson_order', 'Lesson order:') !!}
                            {!! Form::text('lesson_order', null, ['class' => 'form-control']) !!}
                        </div>
                        <!--- Body Form Inout Field --->
                        <div class="form-group">
                            {!! Form::label('lesson_body', 'Description:') !!}
                            {!! Form::textarea('lesson_body', null, ['class' => 'form-control', 'id' => 'test-body-field']) !!}
                        </div>
                        <!--- Published_at Form Input HIDDEN--->
                        <div class="form-group">
                            {!! Form::input('date', 'lesson_published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                        </div>
                        <!--- Submit Course Field --->
                        <div class="form-group">
                            {!! Form::submit('Edit course information', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                        @include('errors.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


