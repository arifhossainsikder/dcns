@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>{{ $news->title }}</h3>
                <h5>{{$news->created_at->diffForHumans()}} / Last modified: {{$news->updated_at->diffForHumans()}}</h5>
                <blockquote>
                    <h5>{{ $news->category->name }}</h5>
                </blockquote>
                <p>{!! html_entity_decode($news->body) !!}</p>
            </div>
            @if($news->photos)
                <div class="col-md-4">
                    <h4>Photos:</h4>
                    <div class="list-group">
                        @foreach($news->photos as $photo)
                        <a href="{{ $photo->file }}" target="_blank" class="list-group-item">{{ $photo->file }}</a>
                       @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="btn alert alert-success text-center" href="{{ route('news.edit',$news->id) }}">Edit</a>
            </div>
            <div class="col-md-4">
                {!! Form::open(['method' => 'DELETE', 'action' => ['NewsController@destroy',$news->id], 'class' =>'form-delete']) !!}
                {!! Form::submit('Delete', ['class' => 'alert alert-danger form-delete','name' => 'delete_modal']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

{{--Modal for delete--}}
<div class="modal" id="confirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you, want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Delete</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    @include('includes.delete_script')
@endsection