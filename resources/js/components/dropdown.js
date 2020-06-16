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
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10 w-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
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
