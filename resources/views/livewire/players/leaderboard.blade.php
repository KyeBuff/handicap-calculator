<section class="flex flex-col">
@foreach ($players as $player)

    <div class="flex justify-between">
        <p class="font-medium">Player</p>
        <p class="font-medium">Handicap</p>
        <p class="font-medium">Points</p>
        <p class="font-medium">Average Points</p>
    </div>

    <div class="flex justify-between">
        <p>{{$player->user->name}}</p>
        <p>{{$player->handicap_index}}</p>
        <p>{{$player->points}}</p>
        <p>{{$player->average_points}}</p>
    </div>

@endforeach
</section>