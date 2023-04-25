@extends('layout_admin.index')

@section('content')

    <x-table :header="['id', 'name_module', 'name_short', 'summary', 'des']" :datas="$data">
        @foreach($data as $item)
            <tr>
                <td scope="row">{{ $item->id }}</td>
                <td>{{ $item->name_module }}</td>
                <td>{{ $item->name_short }}</td>
                <td>{{ $item->summary }}</td>
                <td>{{ $item->des }}</td>
                <td><x-TableWithEditButton :dataId="$item->id" />{{ $item->id }}</td>
            </tr>
        @endforeach
    </x-table>
@endsection