<div class="container-xxl">
    <div class="container">
        <div class="row d-flex justify-content-end">
            <div class="col-md-4">
                <input type="text" id="searchInput" placeholder="Search downloads..." class="form-control mb-4">
            </div>
        </div>
        <div class="row" id="pdfContainer" style="column-gap: 20px">
            @foreach ($pdfgalleries->sortByDesc('id') as $item)
                <div class="col-md-3 shadow p-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <a href="{{ asset($item->pdf) }}" download class="text-primary" title="Download PDF">
                            <i class="fa-solid fa-download"></i>
                        </a>
                        <a href="#" class="text-info view-pdf" data-pdf-url="{{ asset($item->pdf) }}" data-pdf-title="{{ $item->title }}" title="View PDF">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </div>

                    <h4 class="name mt-2">
                        {{ $item->title }}
                    </h4>
                    <p class="desc mb-2">
                        {{ $item->date }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="pagination mt-3"></div>
    </div>
</div>

<!-- PDF Lightbox Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">PDF Viewer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <iframe id="pdfViewer" src="" width="100%" height="600px" style="border: none;"></iframe>
            </div>
            <div class="modal-footer">
                <a id="downloadPdfBtn" href="#" download class="btn btn-primary">
                    <i class="fa-solid fa-download me-2"></i>Download PDF
                </a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
