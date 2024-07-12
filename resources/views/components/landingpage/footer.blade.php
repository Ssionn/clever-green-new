{{-- Todo Fix footer not sticking to bottom --}}

<footer class="bg-transparent text-white">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="{{ route('landingpage.index') }}" class="flex items-center">
                  <img src="{{ asset('storage/images/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-bold uppercase">
                      {{ __('dashboard/footer.links.resources.header') }}
                  </h2>
                  <ul class="font-medium">
                      <li class="mb-4">
                          <a href="https://laravel.com/" class="hover:underline">
                              {{ __('dashboard/footer.links.resources.laravel') }}
                          </a>
                      </li>
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">
                            {{ __('dashboard/footer.links.resources.flowbite') }}
                          </a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">
                              {{ __('dashboard/footer.links.resources.tailwindcss') }}
                          </a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase">
                      {{ __('dashboard/footer.links.follow_us.header') }}
                  </h2>
                  <ul class="font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/Ssionn/clever-green-new" class="hover:underline ">
                              {{ __('dashboard/footer.links.follow_us.github') }}
                          </a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase">
                      {{ __('dashboard/footer.links.legal.header') }}
                  </h2>
                  <ul class="font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">
                              {{ __('dashboard/footer.links.legal.privacy_policy') }}
                          </a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">
                              {{ __('dashboard/footer.links.legal.terms_and_service') }}
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm sm:text-center">© 2023 <a href="{{ route('landingpage.index') }}" class="hover:underline">CleverGreen™</a>. All Rights Reserved.
          </span>
      </div>
    </div>
</footer>
