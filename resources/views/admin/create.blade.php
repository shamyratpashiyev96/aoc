@extends('admin.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('admin_assets/ckeditor/contents.css') }}">
@endsection

@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card-body">
                    <h6 class="card-title m-4">Habar goş</h6>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Ýalňyşlyk!</strong> Maglumatlarňyz doly derejede doldurylmadyk! Haýyş edýäris boş öýlere maglumatlary giriziň.
                        </div>
                    @endif
                    <form action="{{route('news.store')}}" enctype="multipart/form-data" method="POST" class="forms-sample">
                        @csrf
                        <div class="d-flex justify-content-between">
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleInputUsername1" id="alo">Ady TK</label>
                                <input type="text" name="title_tm" value="{{old('title_tm')}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Ady">
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleInputUsername1" id="alo">Ady RU</label>
                                <input type="text" name="title_ru" value="{{old('title_ru')}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Ady">
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleInputUsername1" id="alo">Ady EN</label>
                                <input type="text" name="title_en" value="{{old('title_en')}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Ady">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleFormControlTextarea1">Giňişleýin TK</label>
                                <textarea class="form-control" name="description_tm" placeholder="Giňişleýin" id="ckeditor" rows="10">{{old('description_tm')}}</textarea>
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleFormControlTextarea1">Giňişleýin RU</label>
                                <textarea class="form-control" name="description_ru" placeholder="Giňişleýin" id="ckeditor2" rows="10">{{old('description_ru')}}</textarea>
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleFormControlTextarea1">Giňişleýin EN</label>
                                <textarea class="form-control" name="description_en" placeholder="Giňişleýin" id="ckeditor3" rows="10">{{old('description_en')}}</textarea>
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label>Suraty</label>
                            <input type="file" name="image" id="file-upload-default" class="file-upload-default">
                            <div id="file-upload-browse" class="input-group col-xs-12">
                                <input type="text" name="image" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Ýükle</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label>Senesi</label>
                            <input type="date" name="event_date" style="border: 1px solid #e8ebf1; font-weight: 400; font-size: 0.875rem; margin-left:10px;">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Döret</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="{{ asset('admin_assets/ckeditor/ckeditor.js') }}" type="text/javascript" ></script>
<script type="text/javascript">
    $(function() {
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');
    })
</script>
@endsection
