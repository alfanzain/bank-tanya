<div>
    <div class="flex flex-wrap -mx-3">
        <x-dashboard.card-stats :icon="'ni-money-coins'" :title="'Today\'s Money'" :value="'$53,000'" :percentageChanges="'+55%'" />
        <x-dashboard.card-stats :icon="'ni-world'" :title="'Today\'s Users'" :value="'2,300'" :percentageChanges="'+3%'" />
        <x-dashboard.card-stats :icon="'ni-paper-diploma'" :title="'New Clients'" :value="'+3,462'" :percentageChanges="'-2%'" />
        <x-dashboard.card-stats :icon="'ni-cart'" :title="'Sales'" :value="'$103,430'" :percentageChanges="'-5%'" />
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <x-dashboard.card-illustration
            :title="'Soft UI Dashboard'"
            :subtitle="'Built by developers'"
            :description="'From colors, cards, typography to complex elements you will find the full documentation.'"
        >
            <x-slot:illustration>
                <div class="h-full bg-gradient-fuchsia rounded-xl">
                    <img src="../assets/img/shapes/waves-white.svg"
                        class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                    <div class="relative flex items-center justify-center h-full">
                        <img class="relative z-20 w-full pt-6"
                            src="../assets/img/illustrations/rocket-white.png" alt="rocket" />
                    </div>
                </div>
            </x-slot:illustration>
        </x-dashboard.card-illustration>
        <x-dashboard.card-image
            :title="'Work with the rockets'"
            :caption="'Wealth creation is an evolutionarily recent positive-sum game. It is
            all about who take the opportunity first.'"
            :image="'../assets/img/ivancik.jpg'"
        />
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <x-dashboard.card-stats-graph/>
        <x-dashboard.card-graph/>
    </div>

    <div class="flex flex-wrap my-6 -mx-3">
        <x-dashboard.card-table/>
        <x-dashboard.card-timeline/>
    </div>
</div>
