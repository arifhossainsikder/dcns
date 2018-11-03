@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Arif Hossain"/>
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @if(session()->has('message.level'))
                    <div class="alert alert-{{ session('message.level') }}">
                        {!! session('message.content') !!}
                    </div>
                @endif
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>News title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($news)
                        @foreach($news as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td><a href="{{ route('news.show',$data->id) }}" class="btn btn-default">View</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                {{$news->render()}}
            </div>
        </div>

    </div>
@endsection