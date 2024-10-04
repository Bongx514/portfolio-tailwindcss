<div class="flex flex-col text-center w-full mb-12 pt-16">
    <h1 class="sm:text-5xl text-2xl font-medium title-font mb-4 text-gray-900">My Experience</h1>
</div>

<div class="experience-body">
    <?php if (!empty($experienceData)): ?>
        <?php foreach ($experienceData as $_experience): ?>
            <div class="bg-white">
                <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"><?php echo $_experience->getTitle(); ?></h2>
                        <p class="mt-4 text-gray-500"><?php echo $_experience->getDescription(); ?></p>
                        
                        <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                            <div class="border-t border-gray-200 pt-4">
                                <dt class="font-medium text-gray-900">Company name</dt>
                                <dd class="mt-2 text-sm text-gray-500"><?php echo $_experience->getCompanyName(); ?></dd>
                            </div>

                            <div class="border-t border-gray-200 pt-4">
                                <dt class="font-medium text-gray-900">Start-date</dt>
                                <dd class="mt-2 text-sm text-gray-500"><?php echo $_experience->getStartDate(); ?></dd>
                            </div>

                            <div class="border-t border-gray-200 pt-4">
                                <dt class="font-medium text-gray-900">End-Date</dt>
                                <dd class="mt-2 text-sm text-gray-500">

                                    <?php if ($_experience->getEndDate() === $currentDate): ?>
                                        Currently working
                                    <?php else: ?>
                                        <?php echo $_experience->getEndDate(); ?>
                                    <?php endif?>
                                </dd>
                            </div>

                            <div class="border-t border-gray-200 pt-4">
                                <dt class="font-medium text-gray-900">Duties</dt>
                                <dd class="mt-2 text-sm text-gray-500"><?php echo $_experience->getDuties(); ?></dd>
                            </div>
                        </dl>
                    </div>


                    <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">

                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">

                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
                        
                        <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <?php include('template/notfount.html')?>
    <?php endif; ?>
</div>