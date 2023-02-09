@extends('layout.main')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Data Info PTK
                            & PD</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/peserta">Data Peserta didik</a></li>
                </ol>
            </div>
            <!-- row -->


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Peserta didik Kelas X</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahdatapeserta" class="btn btn-success mb-5">Tambah Kelas</a>
                            <div class="row">
                                @foreach ($data as $item)
                                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="/data/{{ $item->id }}">
                                                <div class="card-header">
                                                    <h4 class="card-title">{{ $item->nama_kelas }}</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('fotosekolah/' . $item->foto) }}" alt=""
                                                        style="width: 50px">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Peserta didik Kelas XI</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahdatapeserta" class="btn btn-success mb-5">Tambah Kelas</a>
                            <div class="row">
                                @foreach ($data1 as $row)
                                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="/dataXI/{{ $row->id }}">
                                                <div class="card-header">
                                                    <h4 class="card-title">{{ $row->nama_kelas }}</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('fotosekolah/' . $row->foto) }}" alt=""
                                                        style="width: 50px">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Peserta didik Kelas XII</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-responsive-sm">
                            <a href="/tambahdatapeserta" class="btn btn-success mb-5">Tambah Kelas</a>
                            <div class="row">
                                @foreach ($data2 as $row)
                                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                                        <div class="card overflow-hidden">
                                            <a href="/dataXII/{{ $row->id }}">
                                                <div class="card-header">
                                                    <h4 class="card-title">{{ $row->nama_kelas }}</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img src="{{ asset('fotosekolah/' . $row->foto) }}" alt=""
                                                        style="width: 50px">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
        integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>


    <script src="{{ asset('template/nabil/xhtml/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('template/nabil/xhtml/js/plugins-init/sparkline-init.js') }}"></script>
@endsection
