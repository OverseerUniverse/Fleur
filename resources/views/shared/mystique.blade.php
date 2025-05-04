<div class="relative ml-auto mr-4 flex h-48 w-full max-w-96 items-center justify-center overflow-hidden rounded-lg sm:w-96">

    <div class="absolute inset-0 bg-[url('images/pink.jpg')] bg-cover bg-center bg-no-repeat mask-center mask-no-repeat mask-size-contain"
         style="mask-image: url('/images/scribble.png'); -webkit-mask-image: url('/images/scribble.png');">
    </div>

    <div class="relative z-10">
      <flux:modal.trigger name="mystique">
        <flux:button class="px-10">About Fleur</flux:button>
      </flux:modal.trigger>
      <flux:modal name="mystique" class="md:w-96">
        <div class="space-y-6">
          <div>
            <flux:heading size="lg">Mystique</flux:heading>
            <flux:text class="mt-2">Make changes to your personal details.</flux:text>
          </div>
        </div>
      </flux:modal>
    </div>

  </div>

