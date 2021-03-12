<section class="flex flex-col justify-between w-8/12 m-auto flex-wrap border-l-2 border-t-2 border-r-2 mt-8">
    <header class="sm:mx-auto sm:w-full">
        <h2 class="my-4 text-xl font-extrabold text-center text-gray-900 leading-9">
            Leaderboard
        </h2>
    </header>
    <div class="flex justify-between items-stretch border-b-2 border-t-2">
        <p class="flex items-center font-medium flex-1 border-r-2 pl-4">Player</p>
        <p class="flex items-center font-medium flex-1 border-r-2 pl-4">Handicap</p>
        <p class="flex items-center font-medium flex-1 border-r-2 pl-4">Average Points</p>
        <p class="flex items-center font-medium flex-1 pl-4">Average Strokes</p>
    </div>
    @foreach ($players as $player)
        <div class="flex justify-between font-mediumflex justify-between border-b-2">
            <p class="flex-1 py-2 border-r-2 pl-4">{{$player->user->name}}</p>
            <p class="flex-1 py-2 pl-4 border-r-2">{{$player->handicap_index}}</p>
            <p class="flex-1 py-2 pl-4 border-r-2">{{$player->average_points}}</p>
            <p class="flex-1 py-2 pl-4">{{$player->average_strokes}}</p>
        </div>
    @endforeach
</section>