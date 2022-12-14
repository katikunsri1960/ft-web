@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Add {{ucfirst(request()->segment(2))}}</h3>
            </div>
            <div class="card-body">
                <form action="{{route('lab.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$data->name}}"
                                placeholder="Nama">
                            @error('name')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Cover Image</label>
                        <div class="form-group col-md-10">
                            <input class="form-control" type="file" name="image">
                            @error('image')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                        @if (!empty($data->image))
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-xl-right">
                            <img src="{{asset($data->image)}}" alt="image" class="thumbimg">
                        </div>
                        @endif
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Kepala Laboratorium</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('kepala_lab') is-invalid @enderror" value="{{$data->kepala_lab}}"
                                name="kepala_lab" placeholder="Kepala Laboratorium">
                            @error('kepala_lab')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Location</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('location') is-invalid @enderror" value="{{$data->location}}"
                                name="location" placeholder="Location">
                            @error('location')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="description" class="col-md-2 form-label">Description</label>
                        <div class="col-md-10">
                            <textarea class="content" name="description">{{ clean($data->description) }}</textarea>
                            @error('description')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mt-4">

                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Update</button>
                            <a href="{{route(request()->segment(2).'.index')}}"
                                class="btn btn-primary ml-2 px-8 mt-2 btn-block">Cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
@push('css')
<link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" />
@endpush
@push('js')
<!-- WYSIWYG Editor JS -->
<script src="{{asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('assets/plugins/wysiwyag/wysiwyag.js')}}"></script>

@endpush
