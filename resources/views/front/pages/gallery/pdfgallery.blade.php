@extends('front.pages.app')
@section('b-items')
    @php

    @endphp
    <li class="breadcrumb-item active" aria-current="page">
        Downloads
    </li>
@endsection
@section('meta')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        .pagination button {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 0px;
        }

        .pagination button:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
@endsection
@section('title')
    - Downloads
@endsection
@section('b-title')
    Downloads
@endsection
@section('pagecontent')
    @includeIf('front.pages.partials.pdfgalleries')
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pdfItems = document.querySelectorAll('#pdfContainer .col-md-3');
            const searchInput = document.getElementById('searchInput');
            const pagination = document.querySelector('.pagination');
            let filteredItems = [...pdfItems]; // Keep track of filtered items
            const itemsPerPage = 6; // Set items per page
            let currentPage = 1; // Default page

            // Function to paginate and display items
            function displayItems(items, page, perPage) {
                const start = (page - 1) * perPage;
                const end = start + perPage;
                pdfItems.forEach(item => item.style.display = 'none'); // Hide all items
                items.slice(start, end).forEach(item => item.style.display = 'block'); // Show paginated items
            }

            // Function to update pagination buttons
            function updatePagination(items, perPage) {
                const totalPages = Math.ceil(items.length / perPage);
                pagination.innerHTML = ''; // Clear existing pagination
                for (let i = 1; i <= totalPages; i++) {
                    const button = document.createElement('button');
                    button.classList.add('btn', 'btn-primary', 'mx-1');
                    button.innerText = i;
                    button.addEventListener('click', function() {
                        currentPage = i;
                        displayItems(items, currentPage, perPage);
                    });
                    pagination.appendChild(button);
                }
            }

            function filterItems() {
                const filter = searchInput.value.toLowerCase();
                filteredItems = [...pdfItems].filter(item => {
                    const name = item.querySelector('h4.name').innerText.toLowerCase();
                    return name.includes(filter);
                });
                currentPage = 1;
                displayItems(filteredItems, currentPage, itemsPerPage);
                updatePagination(filteredItems, itemsPerPage);
            }
            displayItems(filteredItems, currentPage, itemsPerPage);
            updatePagination(filteredItems, itemsPerPage);
            searchInput.addEventListener('input', filterItems);
        });
    </script>
@endsection
