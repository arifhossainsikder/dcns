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
                            {{ $user->name }}
                        </h5>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->info->phone }}</p>
                        <h6>
                            {{ $user->info->district }} correspondent
                        </h6>

                    </div>
                </div>
                <div class="col-md-2">
                    <a class="profile-edit-btn" name="btnAddMore" href="{{ route('correspondent.edit',1) }}">Edit Profile</a>
                </div>
            </div>
        </form>
    </div>
@endsection