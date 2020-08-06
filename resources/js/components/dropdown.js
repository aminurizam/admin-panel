console.log('hai')

new Vue({
    el:'#dropdown',
    data: {
        isOpen: false,
    }
});


/* new Vue({
    el:'#sidebar',
    data: {
        isOpen:false,
    }
}); */


Vue.component('sidebar', {
    data: function() {
        return {
            isOpen: false,
        }
    },
    template: `
    <div>
        <div @click="isOpen = !isOpen" class="w-full flex justify-between items-center py-3 px-8 text-gray-100 cursor-pointer hover:bg-gray-700 hover:text-gray-100 focus:outline-none">
            <span class="flex items-center font-semibold">
                <span class="mr-2">
                    <slot name="icon"></slot>
                </span>
                <slot name="main"></slot>
            </span>
            <span>
                <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                <svg v-if="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
            </span>
        </div>
        <div v-show="isOpen">
            <slot name="content"></slot>
        </div>
    </div>
    `
})

new Vue({
    el:'#sidebar',
})
