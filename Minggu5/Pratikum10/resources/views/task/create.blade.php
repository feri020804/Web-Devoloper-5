@extends('template')
@section('content')
    <div class="container">
        <h1>Tambah Data</h1>
        <div class="card">
            <div class="card-body">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="name" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Masukkan nama Tugas" type="text"
                                value="{{ old('name') }} " class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="deadline" class="col-4 col-form-label">Deadline</label>
                        <div class="col-8">
                            <input id="deadline" name="deadline" type="date" value="{{ old('deadline') }} "
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="status" class="col-4 col-form-label">Status</label>
                        <div class="col-8">
                            <select id="status" name="status" class="form-control">
                                <option value="Belum dikerjakan"
                                    {{ old('status') == 'Belum dikerjakan' ? 'selected' : '' }}>Belum dikerjakan</option>
                                <option value="Sedang dikerjakan"
                                    {{ old('status') == 'Sedang dikerjakan' ? 'selected' : '' }}>Sedang dikerjakan</option>
                                <option value="Selesai" {{ old('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" value="{{ old('deskripsi') }} "
                                class="form-control">{{ old('deskripsi') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
