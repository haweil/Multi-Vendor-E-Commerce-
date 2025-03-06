@extends('layouts.dashboard')

@section('title', 'Categories')

@section('breadcrumb')
    @parent
<li class="breadcrumb-item active">Categories</li>
    @endsection
    @section('content')
    <form action="{{ route('dashboard.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for = "parent_id">Category Parent</label>
            <select name="parent_id" class="form-control form-select">
                <option value="">Primary Category</option>
                @foreach ($parents as $parent)
                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <div class ="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <div>
                <div class="form-check ">
                    <input type="radio" class="form-check-input" name="status" value="active" checked>
                    <label class="form-check-label">Active</label>
                </div>
                <div class="form-check ">
                    <input type="radio" class="form-check-input" name="status" value="archived">
                    <label class="form-check-label">Archived</label>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <a href="{{ route('dashboard.categories.index') }}" class="btn btn-secondary rounded-pill px-4">Cancel</a>
            <button type="submit" class="btn btn-success rounded-pill px-4">Save Changes</button>
        </div>
        </form>

@endsection
