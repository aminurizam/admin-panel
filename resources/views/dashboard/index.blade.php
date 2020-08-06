@extends('dashboard.master')

@section('content')
    <div class="flex min-h-screen">
        <div class="bg-gray-800 sm:w-2/12">
            <div class="border-b border-gray-600 flex justify-center py-4 mb-8">
                <a href="" class="text-white">Logo here</a>
            </div>

            <div id="sidebar">
                <sidebar>
                    <template slot="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 " viewBox="0 0 24 24" fill="none" stroke="#a0aec0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    </template>
                    <template slot="main">Dashboard</template>
                    <template slot="content">
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Dashboard content 1</a>
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Dashboard content 2</a>
                    </template>
                </sidebar>
                <sidebar>
                    <template slot="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#a0aec0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </template>
                    <template slot="main">Users</template>
                    <template slot="content">
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Content 1</a>
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Content 2</a>
                    </template>
                </sidebar>

                <sidebar>
                    <template slot="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#a0aec0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line></svg>
                    </template>
                    <template slot="main">Settings</template>
                    <template slot="content">
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Setting 1</a>
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Setting 2</a>
                    </template>
                </sidebar>

                <sidebar>
                    <template slot="icon">
                        <svg class="w-5 h-5 block" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                            <title>Tailwind CSS</title>
                            <path d="M13.5 11.1C15.3 3.9 19.8.3 27 .3c10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 27.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" transform="translate(5 16)" fill="url(#logoMarkGradient)" fill-rule="evenodd"></path>
                            <defs>
                              <linearGradient x1="0%" y1="0%" y2="100%" id="logoMarkGradient">
                                <stop stop-color="#2298BD"></stop>
                                <stop offset="1" stop-color="#0ED7B5"></stop>


                              </linearGradient>
                            </defs>
                          </svg>
                    </template>
                    <template slot="main">Tailwind</template>
                    <template slot="content">
                        <a href="" class="py-2 px-16 block text-sm text-gray-100 hover:bg-blue-500 hover:text-white">Components</a>
                    </template>
                </sidebar>
            </div>
        </div>
        <div class="sm:w-10/12">
            <div class="bg-gray-400 py-2">
                <div class="flex justify-end">
                    <div class="flex justify-end mr-4 relative w-1/5" id="dropdown">
                        <div class="cursor-pointer flex hover:bg-gray-500 justify-center px-2 py-2 rounded" @click="isOpen = !isOpen">
                            <img src="" class="mr-2 rounded-full w-6 bg-gray-600" alt="">
                            <span class="mr-2">Amin</span>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14 w-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                        </div>

                        <div v-show="isOpen" class="absolute border rounded shadow w-48" style="top: 50px">
                            <div class="border-b flex flex-col">
                                <a href="#" class="hover:bg-gray-200 px-3 py-2">View Profile</a>
                                <a href="#" class="hover:bg-gray-200 px-3 py-2">Settings</a>
                            </div>
                            <div class="flex flex-col">
                                <a href="#" class="hover:bg-gray-200 px-3 py-2">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                content here
            </div>
        </div>
    </div>
@endsection
