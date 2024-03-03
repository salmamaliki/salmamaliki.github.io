@extends('dashboard.layout')

@section('konten')
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-between">
            <div class="col-5">
                <h3>Profile</h3>
                @if (get_meta_value('_foto'))
                    <img style="max-width:100px;max-height:100px" src="{{ asset('foto') . '/' . get_meta_value('_foto') }}">
                @endif
                <div class="mb-3">
                    <label for="_foto" class="form-label">Foto</label>
                    <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                </div>
                <div class="mb-3">
                    <label for="_kota" class="form-label">Kota</label>
                    <input type="text" class="form-control form-control-sm" name="_kota" id="_kota"
                        value="{{ get_meta_value('_kota') }}">
                </div>
                <div class="mb-3">
                    <label for="_provinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi"
                        value="{{ get_meta_value('_provinsi') }}">
                </div>
                <div class="mb-3">
                    <label for="_nohp" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control form-control-sm" name="_nohp" id="_nohp"
                        value="{{ get_meta_value('_nohp') }}">
                </div>
                <div class="mb-3">
                    <label for="_email" class="form-label">Email</label>
                    <input type="text" class="form-control form-control-sm" name="_email" id="_email"
                        value="{{ get_meta_value('_email') }}">
                </div>

            </div>
            <div class="col-5">
                <h3>Akun Media Sosial</h3>
                <div class="mb-3">
                    <label for="_instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control form-control-sm" name="_instagram" id="_instagram"
                        value="{{ get_meta_value('_instagram') }}">

                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" class="form-control form-control-sm" name="_github" id="_github"
                        value="{{ get_meta_value('_github') }}">
                </div>
            </div>
        </div>

        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
    </form>
@endsection