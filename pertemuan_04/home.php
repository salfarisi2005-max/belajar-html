<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />

    <title>
        <?php
        echo "Freelancer Cards - List";
        ?>
    </title>
</head>

<body class="bg-sky-200 w-full flex items-center justify-center min-h-screen p-8">
    <div class="flex gap-8 w-full items-stretch justify-center flex-wrap">
        <?php
        $datas = [
            ['name' => 'Salman Alfarisi', 'is_online' => true, 'age' => 20, 'address' => 'Rangkasbitung, Indonesia', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex numquam quasi cum error eveniet voluptates laboriosam quidem expedita libero sit, exercitationem voluptate sint deleniti!'],
            ['name' => 'Moch Diki Widianto', 'is_online' => false, 'age' => 30, 'address' => 'Serang, Indonesia', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex numquam quasi cum error eveniet voluptates laboriosam quidem expedita libero sit, exercitationem voluptate sint deleniti!'],
            ['name' => 'Muhamad Albuhori', 'is_online' => true, 'age' => 18, 'address' => 'Pandeglang, Indonesia', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex numquam quasi cum error eveniet voluptates laboriosam quidem expedita libero sit, exercitationem voluptate sint deleniti!'],
        ];

        foreach ($datas as $data) {
        ?>
            <!-- Card 1 -->
            <div class="flex flex-col lg:w-1/5 w-2/5 rounded-xl shadow-lg text-center">
                <div
                    class="flex flex-col items-center bg-gray-100 p-6 text-yellow-400 rounded-t-xl">
                    <img
                        src="https://picsum.photos/100"
                        class="w-20 h-20 rounded-full m-auto object-cover" />
                    <div
                        class="h-7 w-7 bg-slate-100 rounded-full flex items-center justify-center -mt-4">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h2 class="mt-3 font-bold text-gray-800">IT Development System</h2>

                    <p class="text-gray-500 text-sm">€14/hour</p>
                </div>

                <div
                    class="flex flex-col items-center px-5 py-4 text-sm text-gray-600 bg-slate-200 rounded-b-xl h-full">
                    <h3 class="font-bold text-gray-800"><?php echo $data['name'] ?>, <?php echo $data['age'] ?></h3>

                    <p class="flex text-sm my-1 gap-2">
                        <i class="bi bi-geo-alt-fill"></i><?php echo $data['address'] ?>
                    </p>

                    <p class="text-xs text-gray-500 m-2 flex-1">
                        <?php echo $data['description'] ?>
                    </p>

                    <button
                        class="mt-4 w-full border border-blue-400 text-blue-500 p-2 rounded-md text-sm font-bold hover:bg-blue-50">
                        VIEW CV
                    </button>

                    <button
                        class="mt-2 w-full bg-blue-500 text-white font-bold p-2 rounded-md text-sm hover:bg-blue-600">
                        MAKE OFFER
                    </button>

                    <p class="text-xs text-slate-500 mt-6 pt-4">
                        <i class="bi bi-circle-fill <?php echo $data['is_online'] ? 'text-green-500' : 'text-slate-500' ?>"></i>
                        <?php echo $data['is_online'] ? 'Online' : 'Offline' ?>
                    </p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>