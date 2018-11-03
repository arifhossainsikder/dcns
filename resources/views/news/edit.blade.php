@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('includes.form_error')
                @if(session()->has('message.level'))
                    <div class="alert alert-{{ session('message.level') }}">
                        {!! session('message.content') !!}
                    </div>
                @endif
                {!! Form::model($news,['method' => 'PATCH', 'action' => ['NewsController@update',$news->id],'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('title','Title:') !!}
                    {!! Form::text('title',null, ['class' => 'form-control','id'=> 'title','placeholder' => 'Enter news title']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category_id','Category:') !!}
                    {!! Form::select('category_id',[''=>'Select category'] + $categories, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body','Description:') !!}
                    {!! Form::textarea('body',null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photos','Photo (You can choose multiple):') !!}
                    <input type="file" multiple class="form-control" name="photos[]">
                    {{--                    {!! Form::file('photos[]',null,['multiple' => true,'class' => 'form-control']) !!}--}}
                </div>
                <button type="submit" class="btn btn-default">Update</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",  // change this value according to your HTML
            plugins: "wordcount"
        });
    </script>
@endsection