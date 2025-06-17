@extends('layouts.app')

@section('content')
    <div class="container custom-container my-3">
        <div class="d-flex justify-content-between my-4">
            <h1>Sensor</h1>
            <!-- Tombol Tambah Buka Modal -->
            <button class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-tambah-sensor">
                Tambah Sensor
            </button>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon alert-icon icon-2">
                        <path d="M5 12l5 5l10 -10"></path>
                    </svg>
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="col-12 mt-4">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th class="w-4 text-center">No</th>
                                <th class="w-20">Nama Sensor</th>
                                <th class="w-10">Data</th>
                                <th class="w-10">Topic</th>
                                <th class="w-10 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sensor as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration + ($sensor->currentPage() - 1) * $sensor->perPage() }}</td>
                                    <td>{{ $item->nama_sensor }}</td>
                                    <td class="text-secondary">{{ $item->data }}</td>
                                    <td class="text-secondary">{{ $item->topic }}</td>
                                    <td class="text-center">
                                        <div class="btn-group gap-2">
                                            <!-- Tombol Edit -->
                                            <button class="btn btn-icon btn-sm btn-outline btn-custom-yellow"
                                                data-bs-toggle="modal" data-bs-target="#modal-edit-{{ $item->id }}" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('sensor.delete', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-icon btn-sm btn-outline-danger" title="Hapus">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 7h16" />
                                                        <path d="M10 11v6" />
                                                        <path d="M14 11v6" />
                                                        <path d="M5 7l1 14h12l1 -14" />
                                                        <path d="M8 7v-4h8v4" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Edit -->
                                <div class="modal modal-blur fade" id="modal-edit-{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Sensor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('sensor.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Sensor</label>
                                                        <input type="text" class="form-control" name="nama_sensor"
                                                            value="{{ $item->nama_sensor }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Data</label>
                                                        <input type="number" class="form-control" name="data"
                                                            value="{{ $item->data }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Topic</label>
                                                        <input type="text" class="form-control" name="topic"
                                                            value="{{ $item->topic }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="d-flex justify-content-center m-3">
                    {{ $sensor->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Sensor -->
    <div class="modal modal-blur fade" id="modal-tambah-sensor" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Sensor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('sensor.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Sensor</label>
                            <input type="text" class="form-control" name="nama_sensor" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="number" class="form-control" name="data" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topic</label>
                            <input type="text" class="form-control" name="topic" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
