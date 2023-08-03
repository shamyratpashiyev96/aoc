@extends('admin.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('admin_assets/ckeditor/contents.css') }}">
@endsection

@section('content')
    <div class="page-content">

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card-body">
                    <h6 class="card-title m-4">Habar üýtget</h6><br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('news.update', $news->id)}}" enctype="multipart/form-data" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="d-flex justify-content-between">
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleInputUsername1" id="alo">Ady TK</label>
                                <input type="text" name="title_tm" value="{{ $news->title_tm }}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Ady">
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleInputUsername1" id="alo">Ady RU</label>
                                <input type="text" name="title_ru" value="{{ $news->title_ru }}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Ady">
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleInputUsername1" id="alo">Ady EN</label>
                                <input type="text" name="title_en" value="{{ $news->title_en }}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Ady">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleFormControlTextarea1">Giňişleýin TK</label>
                                <textarea class="form-control" name="description_tm" placeholder="Giňişleýin" id="ckeditor" rows="10">{{ $news->description_tm }}</textarea>
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleFormControlTextarea1">Giňişleýin RU</label>
                                <textarea class="form-control" name="description_ru" placeholder="Giňişleýin" id="ckeditor2" rows="10">{{ $news->description_ru }}</textarea>
                            </div>
                            <div class="form-group flex-grow-1 m-4">
                                <label for="exampleFormControlTextarea1">Giňişleýin EN</label>
                                <textarea class="form-control" name="description_en" placeholder="Giňişleýin" id="ckeditor3" rows="10">{{ $news->description_en }}</textarea>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Suraty:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <img class="edit-img" src="{{ asset($news->image) }}" width="300px">
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label>Senesi</label>
                            <input type="date" name="event_date" value="{{ date('Y-m-d', strtotime($news->event_date)) }}" style="border: 1px solid #e8ebf1; font-weight: 400; font-size: 0.875rem; margin-left:10px;">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Üýtget</button>
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
