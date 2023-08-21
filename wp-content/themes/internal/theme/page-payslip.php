<?php
/*
	Template Name: Pay Slip
*/
get_header(); ?>

<div class="max-w-7xl mx-auto px-5 mt-16">

<!-- Header Section Start -->
<div class="flex items-center justify-between mb-12">
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80x80-black1.png" alt="">
    </div>
    <div>
        <h1 class="text-5xl font-chivo-h1">Payslip Form</h1>
    </div>
</div>
<!-- Header Section End -->

<!-- Payment info Section Start -->

<div class="border rounded-2xl border-black mb-14">
    <div class="mx-20 ">
        <div class="flex justify-start mt-11">
            <h2 class="text-3xl font-chivo-h2">Payslip form for the month of August, 2023</h2>
        </div>

        <div class="grid grid-cols-3 mt-11">
            <div class="col-span-2 mb-6">
                <div class="mb-6">
                    <label class="text-xl font-normal font-p mb-1">Name</label>
                    <input class="border-2 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="empname" type="text" placeholder="Name">
                </div>
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <div class="mb-6">
                            <label class="text-xl font-normal font-p mb-1">Pay period</label>
                            <input class="border-2 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="payperiod" type="month">
                        </div>

                        <div class="mb-6">
                            <label class="text-xl font-normal font-p mb-1">Date</label>
                            <input class="border-2 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="todayDate" type="date">
                        </div>

                        <div class="mb-6">
                            <label class="text-xl font-normal font-p mb-1">Account number</label>
                            <input class="border-2 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="accNumber" type="text" placeholder="Account Number">
                        </div>
            
                    </div>
                </div>
            </div>
        </div>

        <!-- Earning info section start -->
        


        <div class="grid grid-cols-6">
            <div class="col-span-5">
                <div class="col-start-1 col-end-7">
                    <hr class="border-gray-400">
                </div>
            </div>
        </div>


        <div class="grid grid-cols-6">
            
            <div class="col-span-3">
                <div class="my-6">
                    <label class="text-xl font-semibold font-p mb-1">Earnings</label>
                </div>

                <div class="mb-5">
                    <label class="text-xl font-normal font-p mb-1">Basic</label>
                </div>

                <div class="mb-5">
                    <label class="text-xl font-normal font-p mb-1">OT</label>
                </div>

                <div class="mb-5">
                    <label class="text-xl font-normal font-p mb-1">Commission</label>
                </div>

                <div class="mb-5">
                    <label class="text-xl font-normal font-p mb-1">Bonus</label>
                </div>
            </div>

            <div class="col-span-2">
                <div class="my-6">
                    <label class="text-xl text-end font-semibold font-p mb-1">Amount</label>
                </div>

                <div class="mb-5">
                    <input class="border-2 rounded w-full py-1 text-end px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="basic" type="text" >
                </div>

                <div class="mb-5">
                    <input class="border-2 rounded w-full py-1 text-end px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="basic" type="text" >
                </div>

                <div class="mb-5">
                    <input class="border-2 rounded w-full py-1 text-end px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="basic" type="text" >
                </div>

                <div class="mb-5">
                    <input class="border-2 rounded w-full py-1 text-end px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="basic" type="text" >
                </div>
            </div>

        </div>

        <div class="grid grid-cols-6 mb-6">
            <div class="col-span-5">
                <div class="col-start-1 col-end-7">
                    <hr class="border-gray-400">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-6">
            <div class="col-span-3">
                <div class="mb-5">
                    <p class="text-xl font-semibold font-p mb-1">Total</p>
                </div>
            </div>

            <div class="col-span-2">
                <div class="mb-5">
                    <input class="border-2 rounded w-full py-1 text-end px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="basic" type="text" >
                </div>
            </div>
        </div>

        <!-- Earning info section End -->

        <!-- Submit Section Start -->

        <div class="flex items-center gap-10 mt-14 mb-12">
            <button class="bg-green-700 font-poppins text-center text-2xl font-medium text-white px-12 py-3 rounded-xl">
                Submit
            </button>
            <a class="font-bold text-2xl font-poppins" href="">Cancel</a>
        </div>

        <!-- Submit Section End -->
    </div>
</div>

<!-- Payment info Section End -->
</div>

<?php get_footer(); ?>