<article class="flex-1 md:pr-16">
	<h2 class="my-4 text-xl text-center md:text-left font-extrabold text-gray-900 leading-9">Player Stats</h2>
	<ul class="w-full">
		<li class="font-medium my-4 flex justify-between border-b-2 pb-4">Name<span class="font-normal">{{$user->name}}</span></li>
		<li class="font-medium my-4 flex justify-between border-b-2 pb-4">Handicap<span class="font-normal">{{$player->handicap_index}}</span></li>
		<li class="font-medium my-4 flex justify-between border-b-2 pb-4">Average Points<span class="font-normal">{{number_format($player->average_points)}}</span></li>
		<li class="font-medium my-4 flex justify-between border-b-2 pb-4">Average Strokes<span class="font-normal">{{number_format($player->average_strokes)}}</span></li>
		<li class="font-medium my-4 flex justify-between border-b-2 pb-4">Best Points<span class="font-normal">{{$player->best_points}}</span></li>
		<li class="font-medium my-4 flex justify-between border-b-2 pb-4">Best Strokes<span class="font-normal">{{$player->best_strokes}}</span></li>
	</ul>
</article>