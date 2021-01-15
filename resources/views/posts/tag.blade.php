<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 md:px-8 py-8">

        <h1 class="uppercase text-center text-3xl font-bold">Tag: {{$tag->name}}</h1>

    </div>
   
    @foreach ($posts as $post)
    
     <x-card-post :post="$post"/>

    @endforeach

    <div class="max-w-2xl mt-4 mx-auto">
    
     {{$posts->links()}}
    
    </div>

</x-app-layout>