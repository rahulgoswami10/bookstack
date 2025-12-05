@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <h1 class="page-title">Create New Book</h1>

    <div class="panel">
        <form action="{{ route('admin.books.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf

            <!-- Book Title -->
            <div class="form-group">
                <label class="form-label" for="title">Book Title</label>
                <input 
                    class="form-input" 
                    type="text" 
                    name="title" 
                    id="title" 
                    required
                >
            </div>

            <!-- Book Description -->
            <div class="form-group">
                <label class="form-label" for="description">Book Description</label>
                <textarea 
                    class="form-input" 
                    name="description" 
                    id="description" 
                    rows="4"
                    required
                ></textarea>
            </div>

            <!-- Optional Cover Image -->
            <div class="form-group">
                <label class="form-label" for="cover_image">Cover Image (optional)</label>
                <input 
                    class="form-input" 
                    type="file" 
                    name="cover_image" 
                    id="cover_image"
                >
            </div>

            <button type="submit" class="btn-primary">
                Publish Book
            </button>
        </form>
    </div>
</div>
@endsection

