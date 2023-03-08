@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Aggiungi title</label>
                <input type="text" class="form-control" id="" aria-describedby="" name="title">
                @error('title')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Aggiungi content</label>
                <textarea rows="5" class="form-control" id="" aria-describedby="" name="content"></textarea>
                @error('content')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Seleziona type</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Seleziona type</label>
                <select name="tech_id" id="tech_id">
                    @foreach ($techs as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Crea un nuovo progetto</button>
            </div>
        </form>
    </div>
@endsection
