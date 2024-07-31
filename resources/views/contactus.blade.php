<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        .map iframe {
            width: 100%;
            height: 300px; /* Adjust the height as needed */
            border: 0;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <section class="section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Contact Us</h2>
                            <p>Get in touch with us and find out what programs and coaching sessions would fit your personality best and help you become the best version of yourself.</p>
                            <form method="post" action="/" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="first-name" class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" id="first-name" class="form-control" name="first_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="last-name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" id="last-name" class="form-control" name="last_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" id="email" class="form-control" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Comment or Message</label>
                                    <textarea id="message" class="form-control" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn submit-btn">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="map">
                                <iframe loading="lazy" src="https://maps.google.com/maps?q=Grosvenor%20St%2C%20London%2C%20UK&t=m&z=14&output=embed&iwloc=near" title="Grosvenor St, London, UK" aria-label="Grosvenor St, London, UK"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Bootstrap JS and dependencies CDN -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
        <!-- Additional JS -->
        @yield('scripts')
    </div>
</body>
</html>
