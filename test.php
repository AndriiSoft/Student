<div class="flex justify-center flex-wrap pb-10">
    <?php foreach ($cards as $card): ?>
    <div class="w-full max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700
            <?php if (!$card['availability']) echo 'opacity-50'; ?>">
        <a href="#">
            <img class="p-8 rounded-t-lg" src="<?= $card['img'] ?>" alt="product image"/>
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                    <?= $card['name'] ?> <?= $card['details'] ?>
                </h5>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                    <div class='star-rating' data-rating="<?= $card['rating'] ?>"></div>
                </div>
                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                        <?= $card['rating'] ?>
                    </span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-gray-900 dark:text-white"><?= $card['price'] ?></span>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg t
