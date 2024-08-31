<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header text-center">
                <img src="https://www.grandtaxfilers.com/frontend/images/logo-2.png" width="300px">
            </div>
            <div class="card-body text-center">
                <p>Hello {{ $name }}
                <br>
                <p>Thank you for registering with us.</p>
                <br>
                <p><a href="{{ url('/verify_email/'.$id) }}">Click here</a> to verify Email</p>
            </div>
        </div>
    </div>

</body>

</html>
