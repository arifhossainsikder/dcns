@extends('layouts.app')

@section('content')
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                             alt=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            Kshiti Ghelani
                        </h5>
                        <h6>
                            Barisal correspondent
                        </h6>
                        <p class="proile-rating">Total news by this correspondent : <span>60</span></p>

                    </div>
                </div>
                <div class="col-md-2">
                    <a class="profile-edit-btn" name="btnAddMore" href="{{ route('correspondent.edit',1) }}">Edit Profile</a>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <h3>All news by this correspondent</h3>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Oikyafront invited to Gono Bhaban Nov 1</td>
                        <td><a href="#" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>Oikyafront invited to Gono Bhaban Nov 1</td>
                        <td><a href="#" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>Oikyafront invited to Gono Bhaban Nov 1</td>
                        <td><a href="#" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>Oikyafront invited to Gono Bhaban Nov 1</td>
                        <td><a href="#" class="btn btn-default">View</a></td>
                    </tr>
                    <tr>
                        <td>Oikyafront invited to Gono Bhaban Nov 1</td>
                        <td><a href="#" class="btn btn-default">View</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection