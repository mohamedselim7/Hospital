@extends('layouts.master')


@section('content')
    
<div class="container">
    <h2>Add New Doctor</h2>
    <form action="/AddDoctor" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>description</label>
            <input type="text" id="description" name="description" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone/WhatsApp</label>
            <input type="number" id="phone" name="phone" class="form-control">
        </div>
        <label for="image">صورة الطبيب:</label>
            <input type="file" class="form-control" name="image" id="image" accept="image/*">
        <button type="submit" class="btn btn-primary">Add Doctor</button>
    </form>
</div>
@endsection