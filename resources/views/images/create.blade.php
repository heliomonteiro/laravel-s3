<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-md mx-auto py-8">
        <form action="/" method="post" class="flex items-center justify-between border-bordered-gray-300 rounded" enctype="multipart/form-data">
        @csrf
            <div class="flex justify-center">
                <div class="mb-3 w-96">
                    <label
                    for="image  "
                    class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                    >Default file input example</label
                    >
                    <input
                    class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out file:-mx-3 file:-my-1.5 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-1.5 file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:bg-white focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:bg-transparent dark:text-neutral-200 dark:focus:bg-transparent"
                    type="file"
                    id="image" name="image" />
                </div>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-700 text-white font-bold py-2 px-4 rounded">Upload File</button>
        </form>
    </div>
</body>
</html>