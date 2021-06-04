<x-app-layout>
    <div id="app">
        <div class="flex flex-wrap overflow-hidden">
            <div class="w-3/4 overflow-hidden">
                <agora-video-display
                    current-user-id="{{ Auth::id() }}"
                    current-user-name="{{ \Tipoff\LaravelAgoraApi\Services\DisplayNameService::getDisplayName(Auth::user()) }}"
                    echo-channel-name="{{ config('agora.channel_name') }}"
                    agora-route-prefix="{{ config('agora.routes.prefix') }}"
                    agora-app-id="{{ config('agora.credentials.app_id') }}"
                ></agora-video-display>
            </div>
            <div class="w-1/4 overflow-hidden">
                <agora-incoming-call-alert></agora-incoming-call-alert>
                <agora-outgoing-call-alert></agora-outgoing-call-alert>
                <agora-user-list></agora-user-list>
            </div>
        </div>
    </div>
</x-app-layout>
