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
    </div>
@endsection