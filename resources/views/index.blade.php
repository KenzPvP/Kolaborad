<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kolaborad</title>
    @vite('resources/css/app.css')
</head>
<body>

    <main>
        {{-- navbar --}}
        @include('modals.navbar')
        {{-- content --}}

        @include('sections.home_section')
        @include('sections.about_section')
        @include('sections.services_section')
        @include('sections.testimonial_section')
        @include('sections.blog_section')
        @include('modals.footer')

    </main>

</body>
</html>
