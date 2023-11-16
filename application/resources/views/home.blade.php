<x-cp-layout>
    <x-slot name="title">home</x-slot>
    <x-slot name="slot">
        <section id="title" class="bg-blue-500">
            <div class="container text-center py-52 mx-auto p-4 flex-1 px-4 text-white">
                <h1 class="text-3xl md:text-5xl font-bold">welcome to the constructPlanner</h1>
                <h2 class="text-1xl md:text-3xl">developed and maintained by NETbrew</h2>
                <p class="mt-5">
                    <a href="{{route('login')}}" class="py-3 px-4 bg-white text-blue-500 border-2 border-white rounded hover:bg-blue-500 hover:text-white transition">login</a>
                    <a href="https://github.com/NETbrew/ContractorPlanner" class="py-3 px-4 bg-blue-500 text-white border-2 border-white rounded hover:bg-white hover:text-blue-500 transition" >GitHub Repo</a>
                </p>
            </div>
        </section>
        <section class="container py-28 mx-auto p-4 flex-1 px-4" id="about app">
            <div class="text-center md:text-left md:flex md:justify-center md:items-center">
                <div class="md:w-1/2 pb-16 md:p-0">
                    <img src="{{ asset('/assets/images/front-img-home.png') }}" class="w-3/4 mx-auto rounded-2xl shadow-lg transform rotate-2" alt="foto van digital planner">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold pb-3">Plan your jobs</h3>
                    <p>
                        you can plan every job without any hustle. Create an event, fill in everything
                        from location, squaremeters, type of job, date etc. The tool is at the moment
                        specialized for 'chapewerk' companies but can be modified. If you want more features,
                        you can build them yourself (<a class="underline text-blue-500" href="https://github.com/NETbrew/ContractorPlanner">github</a>)
                        or <a class="underline text-blue-500" href="#form">request</a> it via the form at the bottom of this page.
                    </p>
                </div>
            </div>
        </section>
        <section id="form">
            <div>

            </div>
        </section>
    </x-slot>
</x-cp-layout>
