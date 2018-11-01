@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Edit correspondent profile</h3>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="district">Select district:</label>
                        <select class="form-control" id="district">
                            <option>--Select--</option>
                            <option>Dhaka</option>
                            <option>Comilla</option>
                            <option>Chittagong</option>
                            <option>Rajshahi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <input type="file" class="form-control" id="photo">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection