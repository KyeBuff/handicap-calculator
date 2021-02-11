<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="my-4 text-xl font-extrabold text-center text-gray-900 leading-9">
            Submit a new score
        </h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="log">
                <div>
                    <label for="strokes" class="block text-sm font-medium text-gray-700 leading-5">
                        Strokes
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="strokes" id="strokes" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('strokes') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('strokes')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="points" class="block text-sm font-medium text-gray-700 leading-5">
                        Points
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="points" id="points" type="points" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('points') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('points')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="points" class="block text-sm font-medium text-gray-700 leading-5">
                        Course
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <select wire:model.lazy="course" id="course" name="course" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('course') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                <option value="">Select a course</option>
                            @foreach($courses as $i => $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('course')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Submit
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>