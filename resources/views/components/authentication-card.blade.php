<div class="bg-white min-h-screen flex flex-col md:flex-row sm:justify-between items-center pt-6 sm:pt-0 px-[20pt]">
    <div class="w-full md:w-1/2 grid">
        <div class="md:w-1/2 w-full mx-auto mt-6 px-6 py-4 bg-white  overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <div 
        class="hidden md:flex md:w-1/2 bg-black h-full min-h-screen sticky w-full justify-center items-center" 
        style="background: url('/resources/3/image1.jpg'); background-size: cover; position: sticky"
    >
    </div>
</div>
