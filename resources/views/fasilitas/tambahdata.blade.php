@extends('layout.main')


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('template/nabil/xhtml/javascript:void(0)') }}">Profil</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="/fasilitas">Fasilitas</a></li>
                    <li class="breadcrumb-item active"><a href="">Tambah data </a></li>
                </ol>
            </div>

            <!-- row -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-body">
                    <form action="/insertdatafasilitas" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Ikon</label>
                            <input class="form-control" type="text" name="icon" id="icon">
                        </div>
                        <em style="color: red">- Silahkan Mencari code icon di fontawesome</em><br>
                        <em style="color: red">- Jika icon tidak muncul cari icon yang lain</em>
                        <a href="https://fontawesome.com/search">
                            <em>
                                <p style="color: "> - Klik Disini Jika ingin menuju ke web fontawesome</p>
                            </em>
                        </a>
                        @error('icon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        {{-- <div class="mb-3">
                            <label for="formFile" class="form-label">Masukkan Foto</label>
                            <input class="form-control" type="file" name="foto[]" multiple id="foto">
                        </div> --}}
                        <div class="mb-3">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <p class="mb-0">Upload images</p>
                                        <input name="foto[]" type="file" multiple="" data-max_length="20"
                                            class="upload__inputfile">
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                        @error('foto.*')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror



                        <div class="mb-3">
                            <label for="formFile" class="form-label">Nama Ruang</label>
                            <input class="form-control" type="text" name="nama_ruang" id="nama_ruang">
                        </div>
                        @error('nama_ruang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror



                        <div class="mb-3">
                            <label for="formFile" class="form-label">Jumlah</label>
                            <input class="form-control" type="number" name="jumlah" id="jumlah">
                        </div>
                        @error('jumlah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                    <a href="/fasilitas"> <button class="btn btn-warning">kembali</button></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];
            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html =
                                        "<div class='upload__img-box'><div style='background-image: url(" +
                                        e.target.result + ")' data-number='" + $(
                                            ".upload__img-close").length + "' data-file='" + f
                                        .name +
                                        "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                        // console.log(imgArray);
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>
@endsection
<!-- {{-- @push('styles')
    <link href="{{ asset('template/nabil/xhtml/vendor/summernote/summernote.min.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('template/nabil/xhtml/vendor/summernote/summernote.min.js') }}">
    </script>
    <script src="{{ asset('template/nabil/xhtml/js/plugins-init/summernote-init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        })
    </script>
@endpush --}} -->
