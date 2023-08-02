@extends('admin.layout')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4 pr-4">
                    <h4 class="card-title">Habarlar</h4>
                    <a href="{{route('news.create')}}"><button class="btn btn-primary">Goş</button></a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Ady</th>
                                <th>
                                    Maglumat
                                </th>
                                <th>
                                    Senesi
                                </th>
                                <th>
                                    Suraty
                                </th>
                                <th>
                                    Üýtget
                                </th>
                                <th>
                                    Poz
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($news_all as $news)
                                    <tr>
                                        <td class="py-1">
                                            {!! \Illuminate\Support\Str::limit($news->title_tm, 20, $end='...') !!}
                                        </td>
                                        <td>
                                            {!! \Illuminate\Support\Str::limit($news->description_tm, 50, $end='...') !!}
                                        </td>
                                        <td>
                                            {{date_format($news->created_at,'d.m.Y')}}
                                        </td>
                                        <td>
                                            <img src="{{ asset($news->image) }}" alt="image">
                                        </td>
                                        <td>
                                           <a href="{{route('news.edit', $news)}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                        </td>
                                        <td>
                                            <svg data-toggle="modal" data-target="#exampleModal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="color: #856404; background-color: #fff3cd; border-bottom: 1px solid #ffe79e !important">
                                                        <h5 class="modal-title" id="exampleModalLabel">Duýduryş !</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Siz pozmak isleýärsiňizmi ?!
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ýok</button>
                                                        <form action="{{ route('news.destroy', $news->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input class="btn btn-primary" type="submit" value="Hawa">
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
