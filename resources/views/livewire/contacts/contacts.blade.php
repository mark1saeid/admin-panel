{{-- @author MDITech <mditech.net@gmail.com> --}}

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Contacts
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif











@php

                @endphp








                <x-jet-form-section submit="updateContacts">
                    <x-slot name="title">
                        {{ __('Settings') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Update your contact\'s information and send offer message.') }}
                    </x-slot>

                    <x-slot name="form">




                        <div class="col-span-6 sm:col-span-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                           class="block text-gray-700 text-sm font-bold mb-2">Telegram Support Link :</label>
                                    <input type="text"
                                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                           id="exampleFormControlInput1" placeholder="{{$contacts->ts_link??""}}" wire:model="ts_link">
                                    @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                           class="block text-gray-700 text-sm font-bold mb-2">Telegram Group Link :</label>
                                    <input type="text"
                                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                           id="exampleFormControlInput1" placeholder="{{$contacts->tg_link??""}}" wire:model="tg_link">
                                    @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>











                        <div class="col-span-6 sm:col-span-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                           class="block text-gray-700 text-sm font-bold mb-2">Website Link :</label>
                                    <input type="text"
                                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                           id="exampleFormControlInput1" placeholder="{{$contacts->web_link??""}}" wire:model="web_link">
                                    @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>









                        <div class="col-span-6 sm:col-span-4">
                            <div class="">


                                    <div class="mb-4">
                                        <label for="exampleFormControlInput1"
                                               class="block text-gray-700 text-sm font-bold mb-2">Message :</label>
                                        <textarea rows="10"
                                                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                  id="content" placeholder="{{$contacts->message??""}}" wire:model="message"></textarea>
                                        @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>

                            </div>
                        </div>













                        <div class="col-span-6 sm:col-span-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                           class="block text-gray-700 text-sm font-bold mb-2">iOS Review :</label>
                                    @if($contacts->ios_review == 0)
                                        <x-jet-button type="button"  wire:click.prevent="enableIos(true)">
                                            {{ __('Enable') }}
                                        </x-jet-button>
                                    @else
                                        <x-jet-danger-button  wire:click.prevent="enableIos(false)">
                                            {{ __('Disable') }}
                                        </x-jet-danger-button>
                                        @endif

                                    </label>    @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                            </div>
                        </div>



                        <div class="col-span-6 sm:col-span-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                           class="block text-gray-700 text-sm font-bold mb-2">TV Review :</label>
                                  @if($contacts->tv_review == 0)
                                        <x-jet-button type="button"  wire:click.prevent="enableTV(true)">
                                            {{ __('Enable') }}
                                        </x-jet-button>
                                  @else
                                        <x-jet-danger-button  wire:click.prevent="enableTV(false)">
                                            {{ __('Disable') }}
                                        </x-jet-danger-button>
                                  @endif

                                    </label>    @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                            </div>
                        </div>













                        <div class="col-span-6 sm:col-span-4">
                            <div class="">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1"
                                           class="block text-gray-700 text-sm font-bold mb-2">Public :</label>
                                    @if($contacts->public == 0)
                                        <x-jet-button type="button"  wire:click.prevent="enablePublic(true)">
                                            {{ __('Enable') }}
                                        </x-jet-button>
                                    @else
                                        <x-jet-danger-button  wire:click.prevent="enablePublic(false)">
                                            {{ __('Disable') }}
                                        </x-jet-danger-button>
                                        @endif

                                        </label>    @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>

                            </div>
                        </div>










                    </x-slot>


                    <x-slot name="actions">

                        <label
                            id="savedLabel"
                               class="block text-gray-600 text-sm font-bold mb-2"></label>
                        <button wire:click.prevent="edit()" type="button" onclick="save()"
                                class="inline-flex items-center px-4 py-2 my-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Save
                        </button>

                    </x-slot>





                </x-jet-form-section>






        </div>
    </div>
        </div>
    </div>
</div>

<script>

    function save() {
        document.getElementById('savedLabel').innerHTML = 'Saved!';

    }
</script>
