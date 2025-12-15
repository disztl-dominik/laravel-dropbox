<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feltöltés</title>
        <style>
            body {
                margin: 0;
            }
            h1 {
                padding: 20px;
            }
            a {
                text-decoration: none;
                font-size: 20px;
                color: black;

                &.active {
                    color: blue;
                    text-decoration: underline;
                }
            }
        </style>
    </head>
    <body>
        <div style="display: flex; gap: 30px; width: 100%; padding: 20px; border-bottom: 1px solid black;">
            <a href="/galleries">Galéria</a>
            <a href="#" class="active">Feltöltés</a>
        </div>
        
        <h1>Feltöltés</h1>
        
        <form method="POST" action="/posts" enctype="multipart/form-data" style="padding: 20px;">
            @csrf

            <input type="file" name="file">

            <select name="animal_id">
                <option value="">- Állat -</option>
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                @endforeach
            </select>

            <button type="submit">Feltöltés</button>
        </form>
    </body>
</html>