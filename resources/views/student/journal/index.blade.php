@extends('student.layouts.app')
@section('content')
    {{-- modal tambah data  --}}
    <div id="bs-example-modal-md" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Tambah jurnal
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('journal.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <p style="font-weight:500" class="text-dark mb-2">Tanggal</p>
                                <input type="date" class="form-control" id="tanggal" name="date">
                            </div>
                            <div class="col-12 mt-4">
                                <p style="font-weight:500" class="text-dark mb-2">Jenis kegiatan/Pekerjaan</p>
                                <textarea name="description" class="form-control" placeholder="masukkan jenis kegiatan/pekerjaan anda"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <p style="font-weight:500" class="text-dark mb-2">Nilai-nilai karakter budaya Industri</p>
                                <textarea name="character_values" class="form-control" placeholder="masukkan Nilai-nilai karakter budaya Industri anda"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- end  --}}
    {{-- modal edit data  --}}
    <div id="update-modal" class="modal fade" tabindex="-1" aria-labelledby="bs-example-modal-md"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="myModalLabel">
                        Edit jurnal
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-update" method="post">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <p style="font-weight:500" class="text-dark mb-2">Tanggal</p>
                                <input type="date" id="date-edit" class="form-control" id="tanggal" name="date">
                            </div>
                            <div class="col-12 mt-4">
                                <p style="font-weight:500" class="text-dark mb-2">Jenis kegiatan/Pekerjaan</p>
                                <textarea name="description" id="description-edit" class="form-control" placeholder="masukkan jenis kegiatan/pekerjaan anda"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <p style="font-weight:500" class="text-dark mb-2">Nilai-nilai karakter budaya Industri</p>
                                <textarea name="character_values" id="character_values-edit" class="form-control" placeholder="masukkan Nilai-nilai karakter budaya Industri anda"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect"
                                data-bs-dismiss="modal">
                                Tutup
                            </button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- end  --}}
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h4 class="mb-4" style="font-weight: 600">
                            Data jurnal {{ auth()->user()->name }}
                        </h4>
                    </div>
                    <div class="">
                        <button class="btn me-1 mb-1 btn-light-primary text-primary btn-lg px-4 fs-4 font-medium"
                            data-bs-toggle="modal" data-bs-target="#bs-example-modal-md">
                            Tambah jurnal
                        </button>
                    </div>
                </div>
                <table class="table border text-nowrap customize-table mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Tanggal</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Jenis kegiatan/Pekerjaan</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Nilai-nilai karakter budaya Industri</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($journals as $journal)
                            <tr>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">{{ \Carbon\Carbon::parse($journal->date)->translatedFormat('d F Y') }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">
                                        {{ strlen($journal->description) > 40 ? substr($journal->description, 0, 40) . '...' : $journal->description }}
                                      </p>
                                </td>
                                <td>
                                    <p class="mb-0 fw-normal fs-4">
                                        {{ strlen($journal->character_values) > 40 ? substr($journal->character_values, 0, 40) . '...' : $journal->character_values }}
                                      </p>
                                </td>
                                <td>
                                    <div class="d-flex gap-3 ">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-edit"
                                            data-id="{{ $journal->id }}" data-description="{{ $journal->description }}"
                                            data-character_values="{{ $journal->character_values }}"
                                            data-date="{{ $journal->date }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h6.525q.5 0 .75.313t.25.687t-.262.688T11.5 5H5v14h14v-6.525q0-.5.313-.75t.687-.25t.688.25t.312.75V19q0 .825-.587 1.413T19 21zm4-7v-2.425q0-.4.15-.763t.425-.637l8.6-8.6q.3-.3.675-.45t.75-.15q.4 0 .763.15t.662.45L22.425 3q.275.3.425.663T23 4.4t-.137.738t-.438.662l-8.6 8.6q-.275.275-.637.438t-.763.162H10q-.425 0-.712-.288T9 14m12.025-9.6l-1.4-1.4zM11 13h1.4l5.8-5.8l-.7-.7l-.725-.7L11 11.575zm6.5-6.5l-.725-.7zl.7.7z" />
                                            </svg>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-delete"
                                            data-id="{{ $journal->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <h5 class="text-center">Data jurnal kosong.</h5>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('student.components.delete-modal-component')
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('#form-delete').attr('action', '/journal/delete/' + id);
            $('#modal-delete').modal('show');
        });
        $('.btn-edit').click(function() {
            var id = $(this).data('id');
            var date = $(this).data('date');
            var description = $(this).data('description');
            var character_values = $(this).data('character_values');

            $('#form-update').attr('action', '/journal/update/' + id);
            $('#date-edit').val(date);
            $('#description-edit').val(description);
            $('#character_values-edit').val(character_values);
            $('#update-modal').modal('show');
        });
    </script>
@endsection
