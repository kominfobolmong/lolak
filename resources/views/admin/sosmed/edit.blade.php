@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Sosial Media</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-users"></i> Edit Sosial Media</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.sosmed.update', $sosmed->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="name" value="{{ old('name') ?? $sosmed->name }}" placeholder="Masukkan Nama" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" value="{{ old('url') ?? $sosmed->url }}" placeholder="Masukkan URL" class="form-control @error('url') is-invalid @enderror">

                                @error('url')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>ICON</label>
                                <input type="text" name="icon" value="{{ old('icon') ?? $sosmed->icon }}" placeholder="fas fa-user" class="form-control @error('icon') is-invalid @enderror">

                                @error('icon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop