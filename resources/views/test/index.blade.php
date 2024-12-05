<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .container {
            display: flex;
            align-items: flex-end;
        }

        .text {
            margin-right: 8px;
            margin-left: 8px;
            font-size: 16px;
            line-height: 1.5;
        }

        .image {
            width: 240px;
            height: 150px;
        }
    </style>
</head>

<body>

    <h2>Gallery of Suphachai 66222420012</h2>
    <div class="container">
        <p class="text"> Ant </p>
        <a href="/gallery/ant">
            <img src={{$ant}} class="image">
        </a>


        <p class="text"> Bird </p>
        <a href="/gallery/bird">
            <img src={{$bird}} class="image">
        </a>


        <p class="text"> Cat </p>
        <a href="/gallery/cat">
            <img src={{$cat}} class="image">
        </a>

        <p class="text"> God </p>
        <img src={{$god}} class="image">

        <p class="text"> Spider </p>
        <img src={{$spider}} class="image">
    </div>



</body>
</html>