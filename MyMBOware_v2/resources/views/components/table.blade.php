<!-- resources/views/components/table.blade.php -->

<table {{ $attributes }}>
    <thead>
        <tr>
            @foreach($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
            <tr>
                <!-- @foreach($row as $cell)
                    <td>{{ $cell }}</td>
                @endforeach -->

                {{ $data }}
            </tr>
        @endforeach
    </tbody>
</table>
