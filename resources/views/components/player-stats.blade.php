<article class="flex-1">
	<h2 class="my-4 text-xl font-extrabold text-gray-900 leading-9">Player Stats</h2>
	<ul class="w-full">
		<li class="font-medium my-4 flex justify-between">Name<span class="font-normal">{{$name}}</span></li>
		<li class="font-medium my-4 flex justify-between">Handicap<span class="font-normal">{{$player->handicap_index}}</span></li>
		<li class="font-medium my-4 flex justify-between">Average Strokes<span class="font-normal"></span></li>
		<li class="font-medium my-4 flex justify-between">Average Points<span class="font-normal"></span></li>
		<li class="font-medium my-4 flex justify-between">Best Round<span class="font-normal"></span></li>
	</ul>
</article>