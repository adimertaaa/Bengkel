@extends('layouts.Admin.adminsinglesignon')

@section('content')

<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i class="fas fa-cog"></i></div>
                            Tambah Data Pengguna
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a href="{{ route('manajemen-user.index') }}"
                            class="btn btn-sm btn-light text-primary mr-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="card">
            <div class="card-header border-bottom">
                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard" id="cardTab" role="tablist">
                    <!-- Wizard navigation item 1-->
                    <a class="nav-item nav-link active" id="wizard1-tab" href="#wizard1" data-toggle="tab" role="tab"
                        aria-controls="wizard1" aria-selected="true">
                        <div class="wizard-step-text">
                            <div class="wizard-step-text-name">Formulir Pengguna</div>
                            <div class="wizard-step-text-details">Lengkapi formulir berikut</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="tab-content" id="cardTabContent">
                    <!-- Wizard tab pane item 1-->
                    <div class="tab-pane py-2 py-xl-2 fade show active" id="wizard1" role="tabpanel"
                        aria-labelledby="wizard1-tab">
                        <div class="row justify-content-center">
                            <div class="col-xxl-6 col-xl-9">
                                <h3 class="text-primary">Pengguna</h3>
                                <h5 class="card-title">Input Formulir Pengguna</h5>
                                <form action="{{ route('manajemen-user.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="small mb-1 mr-1" for="id_pegawai">Nama Pegawai</label><span
                                                class="mr-4 mb-3" style="color: red">*</span>
                                            <div class="input-group input-group-joined">
                                                <select class="form-control" name="id_pegawai" id="id_pegawai"
                                                    class="form-control @error('id_jenis_transaksi') is-invalid @enderror">
                                                    <option>Pilih Pegawai</option>
                                                    @foreach ($pegawai as $item)
                                                    <option value="{{ $item->id_pegawai }}">
                                                        {{ $item->nama_pegawai }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('id_pegawai')<div class="text-danger small mb-1">
                                                {{ $message }}
                                            </div> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="small mb-1 mr-1" for="role">Role</label><span
                                                class="mr-4 mb-3" style="color: red">*</span>
                                            <select name="role" id="role" class="form-control"
                                                class="form-control @error('role') is-invalid @enderror">
                                                <option value="{{ old('role')}}"> Pilih Role</option>
                                                <option value="owner">Owner</option>
                                                <option value="admin_front_office">Admin Front Office</option>
                                                <option value="admin_service_advisor">Admin Service Advisor</option>
                                                <option value="admin_service_instructor">Admin Service Instructor
                                                </option>
                                                <option value="admin_kasir">Admin Kasir</option>
                                                <option value="admin_gudang">Admin Gudang</option>
                                                <option value="admin_purchasing">Admin Purchasing</option>
                                                <option value="admin_account_payable">Admin Account Payable</option>
                                                <option value="admin_account_receivable">Admin Account Receivable
                                                </option>
                                                <option value="admin_marketplace">Admin Marketplace</option>
                                            </select>
                                            @error('role')<div class="text-danger small mb-1">{{ $message }}
                                            </div> @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="small mb-1 mr-1" for="username">Username</label><span class="mr-4 mb-3" style="color: red">*</span>
                                            <input class="form-control" id="username" type="text"
                                                name="username" value="{{ $item->username }}"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="small mb-1 mr-1" for="email">Email</label><span class="mr-4 mb-3" style="color: red">*</span>
                                            <input class="form-control" id="email" type="email"
                                                name="email" value="{{ $item->email }}"/>
                                        </div>
                                    </div>
                                    <hr class="my-4" />
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('manajemen-user.index') }}" class="btn btn-light">Kembali</a>
                                        <button class="btn btn-primary" type="Submit">Simpan</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    $(document).ready(function () {
        $('#validasierror').click();
    });

</script>
@endsection
