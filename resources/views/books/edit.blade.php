{{-- This view will show a form for editing an existing book. This form will pre-fill with the book’s current title and author and allow you to update the details. --}}

<!-- resources/views/books/edit.blade.php -->

@extends('layouts.app')

@section('content')
{{-- @push('scripts')
<script src="https://cdn.tiny.cloud/1/06rvyx8fpq7gbg9qkjo0c0fgrs5t46khlfdbn1b549mb03j9/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
@stack('scripts');
<script>
tinymce.init({
    selector: '#description',
    height: 300,
    menubar: false,
    plugins: 'lists link image table code',
    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
    content_style: "body { font-family: Inter, sans-serif; font-size:14px }"
});
</script>
@endpush --}}

<div class="book-edit-wrapper">

    <div class="book-paper">
        <h1 class="book-title-heading">Edit Book</h1>

        <form action="{{ route('admin.books.update', $book->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="form-group">
                <label>Title</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $book->title) }}"
                    class="title-input"
                    required
                >
            </div>

            <!-- Description -->
            <div class="form-group">
                <label>Description</label>
                <textarea
                    name="description"
                    class="description-textarea"
                    id="description"
                    rows="16"
                    required
                >{{ old('description', $book->description) }}</textarea>
            </div>

            <!-- Cover Image -->
            <div class="form-group">
                <label>Cover Image (optional)</label>
                <input type="file" name="cover_image">
            </div>

            <button class="update-btn">Update Book</button>
        </form>
    </div>

</div>
@endsection

