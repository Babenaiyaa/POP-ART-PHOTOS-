<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $theme->name }} - Pop Art Photos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h1, h2 {
            text-align: center;
        }

        .photos {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .photo {
            break-inside: avoid;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: white;
        text-align: center;
        }

        .photo img {
            width: 100%;
            height: auto;
            display: block;
        }

        .photo p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>{{ $theme->name }}</h1>
    <p>{{ $theme->description }}</p>

    <h2>Uploaded Photos</h2>
    <div class="photos">
        @foreach($theme->photos as $photo)
            <div class="photo">
                <img src="{{ asset('storage/' . $photo->image_path) }}" alt="Photo">
                <p>Likes: {{ $photo->likes_count }}</p>
            </div>
        @endforeach
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const photos = document.querySelector('.photos');
        photos.style.columnCount = 3; // Adjust the column count as needed
        photos.style.columnGap = '20px';

        const photoItems = document.querySelectorAll('.photo');
        photoItems.forEach(photo => {
            photo.style.breakInside = 'avoid';
            photo.style.marginBottom = '20px';
        });
    });
</script>

</body>
</html>
