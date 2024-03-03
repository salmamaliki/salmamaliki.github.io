@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('experience.index') }}" class="btnbtn-secondary"
        >Kembali</a></div>
    <form action="{{ route('experience.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Posisi</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="judul"
                id="judul"
                aria-describedby="helpId"
                placeholder="Posisi" value="{{Session::get('judul')}}"/>
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Nama Perusahaan</label>
            <input
                type="text"
                class="form-control form-control-sm"
                name="info1"
                id="info1"
                aria-describedby="helpId"
                placeholder="Nama Perusahaan" value="{{Session::get('info1')}}"/>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai" value="{{Session::get('tgl_mulai')}}" placeholder="dd/mm/yyy"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir" value="{{Session::get('tgl_akhir')}}" placeholder="dd/mm/yyy"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi" id="isi">{{Session::get('isi')}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
        
        <!-- Tambahkan elemen tombol submit atau fungsi lainnya sesuai kebutuhan -->
    </form>
@endsection
