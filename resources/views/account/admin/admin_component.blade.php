@include('account.admin.utils.admin_header')
<main class="w-100">
    <h1 class="text-center">Dashboard</h1>
    <h2 class="text-center text-cap">{{$component}} {{$type}} Component</h2>

    <div class="mt-20">
        <ul data-role="tabs" data-tabs-type="group" data-expand="true">
            <li><a href="#visual">Visual</a></li>
            <li><a href="#code">Code</a></li>
        </ul>
        <div class="border bd-default no-border-top p-2">
            <div id="visual">
                @livewire('card',[
                'title' => 'tetris'
                ])
            </div>
            <div id="code">
                @livewire('card',[
                'showCode' => true,
                'title' => 'tetris'
                ])
            </div>
        </div>
    </div>
</main>
@include('account.admin.utils.admin_footer')
