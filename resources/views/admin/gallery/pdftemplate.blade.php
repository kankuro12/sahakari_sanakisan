<div class="container-xxl">
    <div class="container">
        <table id="pdfTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdfgalleries as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <a href="{{asset($item->pdf)}}" download>
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
