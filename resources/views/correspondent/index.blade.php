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
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>District</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Dhaka</td>
                        <td><a href="{{ route('correspondent.show',1) }}" class="btn btn-default">View</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <ul class="pagination">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
        </div>
    </div>
@endsection