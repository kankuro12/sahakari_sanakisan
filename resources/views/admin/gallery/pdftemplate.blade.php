<table id="myTable" class="display shadow">
    <thead>
        <tr>
            <th>Title</th>
            <th>Published date</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pdfgalleries as $item)
            <tr>
                <td>
                    {{ $item->title }}
                </td>
                <td>
                    {{ $item->date }}
                </td>
                <td>
                    <a href="{{asset($item->pdf)}}" download> Download</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
