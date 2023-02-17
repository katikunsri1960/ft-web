@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h3 class="card-title">Partner</h3>
            </div>
            <div class="card-body">
                {{-- form upload image --}}

                <form action="{{route('partner.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">Image</label>
                        <div class="form-group col-md-10">
                            <input class="form-control" type="file" name="image">
                            @error('image')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mb-4">
                        <label class="col-md-2 form-label">URL</label>
                        <div class="col-md-10">
                            <input type="url" class="form-control @error('url') is-invalid @enderror" name="url"
                                placeholder="URL">
                            @error('url')
                            <span class="text-red">{{$message}}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-4 btn-list">
                            <button type="submit" class="btn btn-success px-8 mt-2 btn-block">Save</button>
                            <a href="{{route('partner.index')}}"
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
