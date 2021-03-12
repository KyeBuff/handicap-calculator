<section class="text-xs md:text-base flex flex-col w-full ustify-between m-auto flex-wrap mt-8">
    <header class="sm:mx-auto sm:w-full">
        <h2 class="my-4 text-xl font-extrabold text-center md:text-left text-gray-900 leading-9">
            Leaderboard
        </h2>
    </header>
    <div class="flex justify-between items-stretch border-2">
        <p class="justify-center text-center flex items-center font-medium flex-1 border-r-2 px-2">Player</p>
        <p class="justify-center text-center flex items-center font-medium flex-1 border-r-2 px-2">Handicap</p>
        <p class="justify-center text-center flex items-center font-medium flex-1 border-r-2 px-2">Average Points</p>
        <p class="justify-center text-center flex items-center font-medium flex-1 px-2">Average Strokes</p>
    </div>
    @foreach ($players as $player)
        <div class="justify-center text-center flex justify-between font-mediumflex justify-between border-b-2 border-l-2 border-r-2">
            <p class="justify-center text-center flex-1 py-2 border-r-2 px-2">{{$player->user->name}}</p>
            <p class="justify-center text-center flex-1 py-2 px-2 border-r-2">{{$player->handicap_index}}</p>
            <p class="justify-center text-center flex-1 py-2 px-2 border-r-2">{{number_format($player->average_points)}}</p>
            <p class="justify-center text-center flex-1 py-2 px-2">{{number_format($player->average_strokes)}}</p>
        </div>
    @endforeach
</section>