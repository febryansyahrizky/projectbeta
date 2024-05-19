
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Note</h1>
                <form method="POST" action="{{ route('notes.store') }}">
                    @csrf
                    <!-- Title and description fields -->
                    <button type="submit">Create Note</button>
                </form>
            </div>
        </div>
    </div>
@endsection