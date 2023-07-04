<x-layout>
    @section('styles')
        <link rel="stylesheet" href="css/wellcomepage.css">
    @endsection

    <div class="grid-container">
        {{-- Wellcome text --}}
        <div class="content-container" id="wellcome-container">
            @include('components/wellcome')
        </div>
        {{-- Slideshow --}}
        <div class="content-container" id="slideshow">
            @include('components/slideshow')
        </div>
    </div>

</x-layout>
  