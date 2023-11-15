<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agung Latihan bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #F5F5F5;
        }
        .container-fluid{
            padding: 0;
        }
        .logo{
            width: 150px;
            margin-top: 50px;
        }

        #headline{
            margin-left: 20px;
            margin-top: 20px;
        }
        h1{
            font-size: 60px;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
        }
        #content{
            margin-left: 20px;
            margin-top: 40px;
            margin-right: 20%;
        }
        p{
            font-size: larger;
            font-family: 'Nunito', sans-serif;
        }
        #subheadline{
            margin-top: 30px;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
        }
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <img src="assetsTugas2/image/Background-image2.png" class="img-fluid" alt="Gambar Anda">
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <img class="logo ml-auto" src="assetsTugas2/image/Dark.png">
                    </div>
                </div>
                <div class="row">
                    <div class="row" id="headline">
                        <h1>Our Mission</h1>
                    </div>
                </div>
                <div class="row" id="content">
                    <div class="row">
                        <h2 id="subheadline">Become the #1 Platform</h2>
                        <p>There is an opportuynity to become the go-to platform for product managers.</p>
                    </div>
                    <div class="row">
                        <h2 id="subheadline">Create a Great Community</h2>
                        <p class="">We want to help others by creating a community where people can get answers to questions.</p>
                    </div>
                    <div class="row">
                        <h2 id="subheadline">Lead by Example</h2>
                        <p>Our goal is to become the industry leader by fostering great relationships.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
