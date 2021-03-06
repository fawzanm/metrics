<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <div class="flex items-center">
            <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                {{svg($icon)}}
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                        {{$title}}
                    </dt>
                    <dd class="flex items-baseline">
                        <div class="text-2xl leading-8 font-semibold text-gray-900">
                            {{$value}}
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 px-4 py-4 sm:px-6">
        <div class="text-sm leading-5">
            <a href="{{$url ?? '#'}}"
               class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">
                View all
            </a>
        </div>
    </div>
</div>
