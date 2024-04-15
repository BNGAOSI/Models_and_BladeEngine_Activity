<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

@include('partials.header')

<div class="container mx-auto">
    <h1 class="text-3xl font-bold my-4">Book List</h1>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')
