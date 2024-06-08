@extends('template')
@section('content')
    <div class="container">
        <h1>Daftar Table Tugas</h1>
        <div class="card mt-3">
            <div class="card-header">
                <h4>Data Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->status_id }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>{{ substr($task->deskripsi, 0 , '50') }} ...</td>
                                <td class="d-flex">
                                    <a  href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">edit</a>
                                    <form method="POST" action="{{ route('tasks.delete', $task->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">delete</submit>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
