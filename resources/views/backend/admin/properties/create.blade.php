

{{-- @extends('layouts.app')  --}}
@extends('main')
<section class="container pt-5 my-5 pb-lg-4">
    <div class="container mt-5">
        <h2>Create Property</h2>
        <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Email :</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="purchase_type">Purchase Type:</label>
                <input type="text" name="purchase_type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">surface:</label>
                <input type="text" name="surface" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">budget:</label>
                <input type="text" name="budget" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="location_id">Location:</label>
                <select name="location_id" class="form-control">
                    @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="bientype_id">Bien Type:</label>
                <select name="bientype_id" class="form-control">
                    @foreach($bientypes as $bientype)
                        <option value="{{ $bientype->id }}">{{ $bientype->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="images">Images:</label>
                <input type="file" name="images[]" multiple accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
