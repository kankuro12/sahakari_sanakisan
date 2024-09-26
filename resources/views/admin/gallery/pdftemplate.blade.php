<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Title</th>
            <th>PUblished date</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pdfgalleries as $pdf)
            <tr>
                <td>
                    {{ $pdf->title }}
                </td>
                <td>
                    {{ $pdf->date }}
                </td>
                <td>
                    <a href="{{asset($pdf->pdf)}}" download> Download</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
