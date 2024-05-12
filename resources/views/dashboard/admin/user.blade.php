@extends('master')
@section('title', 'Dashboard Admin')

@section('css')
    <link href="{{ asset('css/dashboard-user.css') }}" rel="stylesheet">
@endsection

@section('content')
    @if (Auth::user()->role == 'ADMIN')
        <section id="report" class="contact" style="padding-top:32px; height: 70vh;">
            <div class="container" data-aos="fade-up">

                <div class="section-header" style="padding-bottom:16px">
                    <h2>Data Petugas</h2>
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" style="padding-left:16px" class="btn btn-response" data-bs-toggle="modal"
                        data-bs-target="#addpetugas">
                        <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Edit / Add_Plus">
                                    <path id="Vector" d="M6 12H12M12 12H18M12 12V18M12 12V6" stroke="#fff"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                        Tambah Petugas</button>
                </div>
                <div class="wrap-table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Staff ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <button type="button" style="padding: 0; text-align:center;" class="btn"
                                            data-bs-toggle="modal" data-bs-target="#edit{{ $user->user_id }}">
                                            <svg width="21px" height="21px" viewBox="-11.52 -11.52 47.04 47.04"
                                                fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"
                                                    transform="translate(0,0), scale(1)">
                                                    <rect x="-11.52" y="-11.52" width="47.04" height="47.04" rx="23.52"
                                                        fill="#00b6a1" strokewidth="0"></rect>
                                                </g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke="#CCCCCC" stroke-width="4.8">
                                                    <path
                                                        d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z"
                                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13"
                                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z"
                                                        stroke="#fff" stroke-width="2.4" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13"
                                                        stroke="#fff" stroke-width="2.4" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </button>
                                        <button type="button" style="padding: 0;" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $user->user_id }}">
                                            <svg fill="#fff" width="21px" height="21px"
                                                viewBox="-12.48 -12.48 48.96 48.96" xmlns="http://www.w3.org/2000/svg"
                                                stroke="#fff" stroke-width="0.024">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                    <rect x="-12.48" y="-12.48" width="48.96" height="48.96" rx="24.48"
                                                        fill="#f85a40" strokewidth="0"></rect>
                                                </g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M5.755,20.283,4,8H20L18.245,20.283A2,2,0,0,1,16.265,22H7.735A2,2,0,0,1,5.755,20.283ZM21,4H16V3a1,1,0,0,0-1-1H9A1,1,0,0,0,8,3V4H3A1,1,0,0,0,3,6H21a1,1,0,0,0,0-2Z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
                        <!-- Pagination -->
                    </nav>
                </div>
            </div>
        </section>

        <!-- Add Modal -->
        <div class="modal fade" id="addpetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Petugas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.user.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="mb-1" for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <label class="mb-1" for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Email@example.com" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-response" name="add">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Modals -->
        @foreach ($users as $user)
            <div class="modal fade" id="edit{{ $user->user_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Petugas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('admin.user.put', $user->user_id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                <div class="form-group">
                                    <label class="mb-1" for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group mt-3">
                                    <label class="mb-1" for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Email@example.com" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-response" name="edit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Delete Modals -->
        @foreach ($users as $user)
            <div class="modal fade" id="delete{{ $user->user_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Petugas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ route('admin.user.delete', $user->user_id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                                <p>Apakah anda yakin ingin menghapus petugas <span
                                        style="color: #0077b6;">{{ $user->name }}</span>?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-response" name="delete">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection
