<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times of India Articles</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Times of India Articles</h1>
        <table id="articles-table" class="display">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Publication Date</th>
                </tr>
            </thead>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('data.get') }}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'link', name: 'link' },
                    { data: 'pubDate', name: 'pubDate' }
                ],
                searching: true,
                ordering: true,
                paging: true
            });
        });
    </script>
</body>
</html>
