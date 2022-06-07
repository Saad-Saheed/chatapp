@extends('layouts.common')

@section('title')
Chating App
@endsection

@section('links')
<!-- Page plugins -->
<link rel="stylesheet" href="{{asset('css/%40fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('css/argon.min5438.css?v=1.2.0')}}" type="text/css">
<style>
    .reply-container {
        display: none;
    }

    #dropdownMenuLink::after {
        content: none !important;
    }
</style>
@endsection

@section('jslinks')
<!-- Argon JS -->
<script src="{{asset('js/argon.min5438.js?v=1.2.0')}}"></script>


<!-- Optional JS -->

@endsection

@section('content')
<!-- Main content -->
<div class="main-content my-lg-7 my-6">

    <!-- Header -->
    <div class="header py-5 pt-lg-5">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-primary">Let's Chat</h1>
                        <p class="text-primary"> A Realtime Message is here! </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-md-10 mx-auto">


                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="h3 my-0">Messaging</h5>
                                </div>

                                <!-- Messages -->
                                <div class="mb-1 card-body clearfix">

                                    <chat-messages :messages="messages"></chat-messages>


                                    <div class="media align-items-center clearfix d-block w-75 float-right mt-5">
                                        <chat-form v-on:messagesent="addMessage" :user="{{Auth::user()}}"></chat-form>
                                    </div>


                                </div>





                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection












{{-- MESSAGE FORM  --}}

{{-- <div class="media-body">

    <form class="" method="POST" action="/comment">
        @csrf
        <input type="hidden" name="_method" value="POST">

        <div class="form-group">
            <textarea name="body" value="{{old('body')}}" class="form-control @error('body') is-invalid @enderror"
placeholder="Write your comment" rows="1"></textarea>
@error('body')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>

<div class="form-group">
    <input type="hidden" name="blog_id" value="" class="form-control @error('blog_id') is-invalid @enderror">
    @error('blog_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary float-right" value="Send">
</div>

</form>

</div> --}}