@extends('layouts.app')

@section('content')
@push('scripts')
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
@endpush

<div class="page-create-wrapper">

    <h1 class="page-title">Create New Book</h1>

    <div class="create-panel">
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
                    class="description-textarea" 
                    name="description" 
                    id="description" 
                    rows="12"
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

