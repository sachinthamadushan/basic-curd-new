<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>@yield('title')</title>
    <style>
        .hover-bg-primary:hover {
            background-color: #ff1692;
        }
    </style>
</head>
<body>
<header>
    @include('partials.navbar')
</header>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let toastEl = document.querySelector('.toast');
        if (toastEl) {
            let toast = new bootstrap.Toast(toastEl);
            toast.show();
            setTimeout(() => {
                toast.hide();
            }, 3000); // Auto-hide after 3 seconds
        }
    });
</script>
</body>
</html>
