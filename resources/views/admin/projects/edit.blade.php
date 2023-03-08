@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.projects.update', ['project' => $project['slug']])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">modifica title</label>
          <input value="{{ old('title') ?? $project['title'] }}" type="text" class="form-control" id="" aria-describedby="" name="title">
          @error('title')
          <div class="alert alert-danger mt-2">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">modifica descrizione</label>
            <textarea rows="5" class="form-control" id="" aria-describedby="" name="content">{{ old('content') ?? $project['content'] }}</textarea>
            @error('content')
            <div class="alert alert-danger mt-2">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Seleziona type</label>
          <select name="type_id" id="type_id">
            @foreach ($types as $item)
              <option value="{{ $item['id']}}" {{$item['id'] == old('type_id', $project['type_id']) ? 'selected' : ''}}>{{$item['name']}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salva modifiche</button>
        </div>
      </form>
</div>
@endsection