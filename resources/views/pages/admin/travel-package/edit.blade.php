@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="tilte">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label for="location">location</label>
                    <input type="text" class="form-control" name="location" placeholder="location" value="{{ $item->location }}">
                </div>
                <div class="form-group">
                    <label for="about">about</label>
                    <textarea name="about" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured-event">featured-event</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="featured-event" value="{{ $item->featured_event }}">
                </div>
                <div class="form-group">
                    <label for="language">language</label>
                    <input type="text" class="form-control" name="language" placeholder="language" value="{{ $item->language }}">
                </div>
                <div class="form-group">
                    <label for="foods">foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="foods" value="{{ $item->foods }}">
                </div>
                <div class="form-group">
                    <label for="departure-date">departure-date</label>
                    <input type="date" name="departure_date" class="form-control" placeholder="departure date" value="{{ $item->departure_date }}">
                </div>
                <div class="form-group">
                    <label for="duration">duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="duration" value="{{ $item->duration }}">
                </div>
                <div class="form-group">
                    <label for="type">type</label>
                    <input type="text" class="form-control" name="type" placeholder="type" value="{{ $item->type }}">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control" name="price" placeholder="price" value="{{ $item->price }}">
                </div>
                <button class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
