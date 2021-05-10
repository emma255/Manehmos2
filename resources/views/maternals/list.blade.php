@extends('layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Orodha ya kinamama</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (count($maternals))
            <table class="table table-bordered table-hover table-sm table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Namba</th>
                        <th>Jina</th>
                        <th>Tarehe ya kuandikishwa</th>
                        <th>Jina la mume</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($maternals as $maternal)
                    <tr>
                        <td>{{ $loop->iteration++ }}</td>
                        <td>{{$maternal->namba_ya_usajili}}</td>
                        <td>{{$maternal->jina_la_mama}}</td>
                        <td>{{$maternal->tarehe_ya_kuandikishwa}}</td>
                        <td>{{$maternal->jina_la_mume}}</td>
                        <td>
                            <a href={{ route('register6',['maternal'=>$maternal]) }} class="btn btn-primary btn-sm">
                                Chagua
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h4 class="text-center">Hakuna mama mjamzito ambaye amerekodiwa</h4>
            @endif

        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
