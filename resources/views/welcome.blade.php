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
    <div class="mt-28">
        @include('shared.author')
    </div>
</x-layouts.guest>
