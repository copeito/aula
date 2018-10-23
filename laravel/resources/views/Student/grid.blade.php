@extends('layouts.layout')
@section('content')
<table id="students" class="copeitoGrid display" style="width:100%">
    <thead>
        <tr>
            @foreach ($fieldLabels as $label)
                <th>
                    {{ $label }}
                </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $id => $values)
            <tr>
                @foreach ($values as $value)
                    <td>
                        {{ $value }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
