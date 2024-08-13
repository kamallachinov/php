<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>

    <main class="container">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <form>
                <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                    <div class="mt-2">
                        <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

                <div class="col-span-full">
                    <div class="mt-2 flex items-center gap-x-3">
                        <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                    </div>
                </div>

            </form>

        </div>
    </main>


<?php require "partials/footer.php" ?>