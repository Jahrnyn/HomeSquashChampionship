<x-layout>
    <div id="content-container">
        <div class="left-container">
            @include('components/wellcome')
        </div>

        {{-- Slideshow --}}
        <div class="center-container" id="slideshow">
            @include('components/slideshow')
        </div>

    </div>
</x-layout>
  