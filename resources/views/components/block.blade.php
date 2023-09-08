<div class="relative max-w-6xl mx-auto px-4 sm:px-6">

    <x-head-block title="Explore the solutions"
        subtitle="Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat." />

    <div class="max-w-sm mx-auto grid gap-6 md:grid-cols-2 lg:grid-cols-3 items-start md:max-w-2xl lg:max-w-none">

        @for ($i = 1; $i <= 6; $i++)
            <x-card title="Lorem ipsum dolor sit amet"
                subtitle="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
        @endfor

    </div>
</div>
