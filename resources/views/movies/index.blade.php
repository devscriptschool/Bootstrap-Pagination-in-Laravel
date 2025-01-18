<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Movies List</h1>

    <!-- Movies List -->
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Country</th>
            <th>Release Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->country }}</td>
                <td>{{ $movie->release_date }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    {{ $movies->links() }}

    <!-- Footer -->
    <footer class="mt-5 text-center">
        <p>Created with ♥ by DevScriptSchool.Com</p>
    </footer>
</div>

</body>
</html>
