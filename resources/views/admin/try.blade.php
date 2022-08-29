@extends('layout.layout')
@section('tittle')
    Dashboard
@endsection

@section('content')
    <div>
        <div class="row">
        <div class="contact-main">
            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-lg-8 mb-4 contact-left">
                        <h3>Generate transactions</h3>

                        <form enctype="multipart" id="avatarForm" method="post" action="{{route('avatarUpload')}}">
                    @csrf
                        <input type="file" name="avatar">
                        <button type="submit" id="avatarbtn">Upload</button>
                </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

        </div>
    </div>
@endsection
