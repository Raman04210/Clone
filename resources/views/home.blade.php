@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row p-5 bg-white border rounded">
            
            </div>

            <div class="row p-5 bg-white border rounded my-3">
            
            </div>
        </div>

        <div class="d-none d-lg-block col-lg-4 px-5 py-3">
            <div class="row">
                <div class="col">
                    <div class="row d-flex">
                        <div class="col-3">
                            <img src="/image/profile_image/{{ Auth::user()->image }}" width="65px" height="65px" class="rounded-circle border">
                        </div>
                        <div class="col-9 pl-4">
                            <a href="#" class="text-decoration-none text-dark"><h4 class="mb-0 mt-2"><strong>{{ Auth::user()->username }}</strong></h4></a>
                            <p class="text-muted">{{ Auth::user()->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <p class="text-muted font-weight-bold">Suggestions For You <a href="#" class="float-right">See all</a></p>
                    <div class="row d-flex">
                        <div class="col-2">
                            <img src="/image/profile_image/{{ Auth::user()->image }}" width="40px" height="40px" class="rounded-circle border">
                        </div>
                        <div class="col-10">
                        <p><a href="#" class="text-decoration-none text-dark"><span class="h5 mb-0"><b>{{ Auth::user()->username }}</b></span></a>
                            <span class="float-right"><a href="#"><b>Follow</b></a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
