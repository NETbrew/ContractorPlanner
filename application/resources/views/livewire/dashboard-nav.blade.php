<!-- Sidebar -->
    <div id="dashboard-nav" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 dark:bg-blue-500 dark:border-gray-700">
        <div class="px-6 flex">
           {{-- <a href="#">
                <img src="#" alt="profile photo">
            </a>--}}
            <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">company</a>
        </div>
        <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <li>
                    @livewire('datepicker')
                </li>
                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 | text-blue-500 bg-white rounded transition" href="#">
                        <x-uni-calender class="h-6" />
                        calendar
                    </a>
                </li>
                <li>
                    <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 | text-white hover:text-blue-500 hover:bg-white rounded transition" href="#">
                        <x-bxs-contact class="h-6" />
                        contacts
                    </a>
                </li>
            </ul>
        </nav>
        <div class="absolute left-2 bottom-10 w-11/12">
            <a class="w-full flex items-center mt-auto gap-x-3.5 py-2 px-2.5 | text-blue-500 text-2xl bg-white rounded hover:opacity-80 transition" href="#">
                <x-feathericon-settings class="h-10"/>
                settings
            </a>
        </div>
    </div>
    <!-- End Sidebar -->
