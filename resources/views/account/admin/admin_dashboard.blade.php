@include('account.admin.utils.admin_header')
<main class="w-100">
    <h1 class="text-center">Dashboard</h1>

    <section class="d-flex flex-row flex-justify-around w-100">
        <div>

            @livewire('admin.stats', [
            'title' => 'total games on sale',
            'base_value' => 125,
            'sub_value' => 42,
            ])
        </div>

        <div>
            @livewire('admin.stats', [
            'type' => 'integer',
            'title' => 'total users',
            'base_value' => 75,
            ])

            @livewire('admin.stats', [
            'title' => 'total sellers',
            'base_value' => 75,
            'sub_value' => 50,
            ])
        </div>

    </section>
</main>
@include('account.admin.utils.admin_footer')
