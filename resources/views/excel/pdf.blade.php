@extends('layout.app')

@section('content')
<table class="table table-bordered container" style="margin-top: 10rem" id="export">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">السن</th>
            <th scope="col">النوع</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($healths as $index => $health)
        <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $health->name }}</td>
            <td>{{ $health->age }}</td>
            <td>{{ $health->gender }}</td>
        </tr>
        @endforeach
        {{-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
        </tr> --}}
    </tbody>
</table>
@endsection
