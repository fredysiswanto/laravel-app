@extends('layout.apps')

@section('title', 'Event Detail')

@section('content')


<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <img src="{{ asset('/storage/events/'.$event->img_banner) }}" class="rounded" style="width: 100%">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3>{{ $event->title }}</h3>
                    <hr/>
                    <p>{{ "Rp " . number_format($event->price,2,',','.') }}</p>
                    <code>
                        <p>{!! $event->description !!}</p>
                    </code>
                    <hr/>
                    <p>Max Peserta : {{ $event->max_participants }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
