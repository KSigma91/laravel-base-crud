@extends('admin.templates.base')

@section('mainContent')
    <main>
        <table>
            <thead>
                <th>
                    {{-- <tr>id</tr> --}}
                    <tr>title</tr>
                    <tr>description</tr>
                    <tr>thumb</tr>
                    <tr>price</tr>
                    <tr>series</tr>
                    <tr>sale_date</tr>
                    <tr>type</tr>
                    <tr>artists</tr>
                    <tr>writers</tr>
                </th>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    {{-- <tr>{{ $comic->id }}</tr> --}}
                    <tr>{{ $comic[->title] }}</tr>
                    <tr>{{ $comic->description }}</tr>
                    <tr>{{ $comic->thumb }}</tr>
                    <tr>{{ $comic->price }}</tr>
                    <tr>{{ $comic->series }}</tr>
                    <tr>{{ $comic->sale_date }}</tr>
                    <tr>{{ $comic->type }}</tr>
                    <tr>{{ $comic->artists }}</tr>
                    <tr>{{ $comic->writers }}</tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
