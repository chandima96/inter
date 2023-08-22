<?php
/*
	Template Name: Leave Request
*/
get_header(); ?>


<div class="max-w-7xl mx-auto px-5 mt-16">

        <!-- Header Section Start -->
        <div class="flex items-center justify-between mb-12">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80x80-black1.png" alt="">
            </div>
            <div>
                <h1 class="text-5xl font-chivo text-[#0f2b1a]">Leave Request Form</h1>
            </div>
        </div>
        <!-- Header Section End -->

        <!-- Leave Form Section Start -->
        <div class="border rounded-2xl border-black">
            <div class="mx-20"> 
                <div class="grid grid-cols-3 ">
                    <div class="col-span-2 mt-14">
                        <div class="mb-6">
                            <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Name</label>
                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="empname" type="text" placeholder="Name">
                        </div>

                        <div class="grid grid-cols-2 gap-20">
                            <div>
                                <div class="mb-6">
                                    <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Date - From</label>
                                    <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="datefrom" type="date">
                                </div>
                            </div>

                            <div>
                                <div class="mb-6">
                                    <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Date - To</label>
                                    <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="dateto" type="date">
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Reason for Leave</label>
                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="leavereason" type="text" placeholder="Reason">
                        </div>

                        <div>
                            <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Description</label>
                        </div>
                        
                        <div class="mb-10">
                            <textarea class="border resize rounded-md py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" name="" id="" cols="72" rows="3" placeholder="Description" ></textarea>
                        </div>
                    </div>
                </div>
                <!-- Leave Form Section End -->

                <!-- Submit Section Start -->

                <div class="flex items-center gap-10 mb-16">
                    <button class="bg-green-700 text-center font-poppins text-2xl font-medium text-white px-12 py-3 rounded-xl">
                        Submit
                    </button>
                    <a class="font-bold text-2xl font-poppins text-[#0f2b1a]" href="">Cancel</a>
                </div>

                <!-- Submit Section End -->
            </div>
        </div>


<?php get_footer(); ?>