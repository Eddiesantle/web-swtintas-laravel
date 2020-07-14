@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">

            <div class="col-md-6 border text-center mb-5">

                @if ($message = Session::get('successavatar'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

            @endif

                <div class="profile-header-container">
                    <div class="profile-header-img">
                        <img class="rounded-circle" src="storage/avatars/{{ $user->avatar }}" style="width:100px;" />
                        <!-- badge -->
                        <div class="rank-label-container">
                            <span class="label label-default rank-label">{{$user->name}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="w-100">
                    <h1>
                        Alterar Foto
                    </h1>
                </div>
                <form action="{{route('avatar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection