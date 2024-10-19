<div x-data="{ isScrollTop: false }" x-init="window.addEventListener('scroll', function() {
    isScrollTop = (window.scrollY > 200);
})" x-cloak class="fixed bottom-0 right-0 mr-4 mb-4 transition-opacity duration-500" :class="{ 'opacity-100': isScrollTop, 'opacity-0': !isScrollTop }">
    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
</div>