<x-layouts.guest :title="__('Welcome')">
    <div class="mt-8">
        @include('shared.hero')
    </div>
    <div class="mt-28">
        @include('shared.mystique')
    </div>
    <div class="mt-28">
        @include('shared.story')
    </div>
    <div class="mt-28">
        @include('shared.themes')
    </div>

    <div id="cheeto"
        class="mt-5 relative mr-auto ml-4 flex h-48 w-full max-w-96 items-center justify-center overflow-hidden rounded-lg sm:w-96">
        <img src="{{ asset('images/cheeto.png') }}" alt="Cover Image" class="w-1/2">
        {{-- footer --}}
    </div>
    @include('footer')


    <script>
        // Preload the audio file
        const clickSound = new Audio('{{ asset('sfx/bubble-pop.mp3') }}');
        const scream = new Audio('{{ asset('sfx/scream.mp3') }}');
        const dash = new Audio('{{ asset('sfx/dash.mp3') }}');
        scream.load();
        dash.load();
        clickSound.load();

        // Wait for the DOM to load
        document.addEventListener('DOMContentLoaded', function() {
            // Select all buttons with the class 'sound-button'
            const buttons = document.querySelectorAll('.sound-button');

            // Attach the sound effect to each button
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    clickSound.currentTime = 0; // Reset playback position
                    clickSound.play();
                });
            });
        });

        // Add event listener to cheeto
        document.getElementById('cheeto').addEventListener('click', function() {
            dash.play();
            scream.play();

            setTimeout(() => {


                // Replace the cheeto image with the dash image
                const cheetoElement = document.querySelector('#cheeto img');
                cheetoElement.src = '{{ asset('images/dash.png') }}'; // Replace with the dash image path
                cheetoElement.alt = 'Dash Image';

                // Remove the image after a delay
                setTimeout(() => {
                    cheetoElement.remove();
                }, 500); // Adjust the delay as needed
            }, 500);
        });
    </script>
</x-layouts.guest>
