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
            @if (count($infants))
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
                    @foreach ($infants as $infant)
                    <tr>
                        <td>{{ $loop->iteration++ }}</td>
                        <td>{{$infant->namba_ya_usajili}}</td>
                        <td>{{$infant->jina_la_mama}}</td>
                        <td>{{$infant->tarehe_ya_kuandikishwa}}</td>
                        <td>{{$infant->jina_la_mume}}</td>
                        <td>
                            <a href={{ route('register6',['infant'=>$infant]) }} class="btn btn-primary btn-sm">
                                Chagua
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h4 class="text-center">Hakuna mtoto mchanga ambaye amesajiliwa kwenye mfumo</h4>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
</section>
@endsection
