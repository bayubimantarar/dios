@extends('layouts.main')

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('title')
  Pegawai
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card" style="margin-top: 25px;">
        <div class="card-body">
          <h5 class="card-title">Pegawai &raquo; Form Tambah</h5>
          <form action="/simpan" method="post" enctype="multipart/form-data">
            <input
                type="hidden"
                name="_token"
                value="{{ csrf_token() }}"
            />
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="">
                            NIP
                        </label>
                        <input
                            type="text"
                            name="nip"
                            id="nip"
                            class="form-control {{ $errors->has('nip') ? 'is-invalid' : ''}}"
                            value="{{ old('nip') }}"
                        />
                        @if($errors->has('nip'))
                          <p class="invalid-feedback">
                            {{ $errors->first('nip') }}
                          </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="name">
                            Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
                            value="{{ old('name') }}"
                        />
                        @if($errors->has('name'))
                          <p class="invalid-feedback">
                            {{ $errors->first('name') }}
                          </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>
                        <input
                            type="text"
                            name="email"
                            id="email"
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"
                            value="{{ old('email') }}"
                        />
                        @if($errors->has('email'))
                          <p class="invalid-feedback">
                            {{ $errors->first('email') }}
                          </p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="">
                            Gender
                        </label>
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="gender-male"
                                name="gender"
                                class="custom-control-input {{ $errors->has('gender') ? 'is-invalid' : ''}}"
                                value="Male"
                                {{ old('gender') == 'Male' ? 'checked' : '' }}
                            />
                            <label class="custom-control-label" for="gender-male">
                                Male
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="gender-female"
                                name="gender"
                                class="custom-control-input {{ $errors->has('gender') ? 'is-invalid' : ''}}"
                                value="Female"
                                {{ old('gender') == 'Female' ? 'checked' : '' }}
                            />
                            <label class="custom-control-label" for="gender-female">
                                Female
                            </label>
                        </div>
                        @if($errors->has('gender'))
                          <small class="text-danger">
                            {{ $errors->first('gender') }}
                          </small>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="">
                            Hobby
                        </label>
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="hobby-sepak-bola"
                                name="hobby"
                                class="custom-control-input {{ $errors->has('hobby') ? 'is-invalid' : ''}}"
                                value="Sepak Bola"
                                {{ old('hobby') == 'Sepak Bola' ? 'checked' : '' }}
                            />
                            <label class="custom-control-label" for="hobby-sepak-bola">
                                Sepak Bola
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="hobby-voli"
                                name="hobby"
                                class="custom-control-input {{ $errors->has('hobby') ? 'is-invalid' : ''}}"
                                value="Voli"
                                {{ old('hobby') == 'Voli' ? 'checked' : '' }}
                            />
                            <label class="custom-control-label" for="hobby-voli">
                                Voli
                            </label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input
                                type="radio"
                                id="hobby-tenis-meja"
                                name="hobby"
                                class="custom-control-input {{ $errors->has('hobby') ? 'is-invalid' : ''}}"
                                value="Tenis Meja"
                                {{ old('hobby') == 'Tenis Meja' ? 'checked' : '' }}
                            />
                            <label class="custom-control-label" for="hobby-tenis-meja">
                                Tenis Meja
                            </label>
                        </div>
                        @if($errors->has('hobby'))
                          <small class="text-danger">
                            {{ $errors->first('hobby') }}
                          </small>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="form-group">
                        <label for="photo">
                            Photo
                        </label>
                        <br />
                        <input
                            type="file"
                            name="photo"
                            id="photo"
                            class="{{ $errors->has('photo') ? 'is-invalid' : ''}}"
                        />
                        <br />
                        @if($errors->has('photo'))
                          <small class="text-danger">
                            {{ $errors->first('photo') }}
                          </small>
                        @endif
                    </div>
                </div>
            </div>
            <button
                type="submit"
                class="btn btn-sm btn-primary"
            >
                Simpan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
