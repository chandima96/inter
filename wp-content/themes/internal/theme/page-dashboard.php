<?php
/*
	Template Name: Dashboard
*/
get_header(); ?>

<div class="bg-zinc-800">

<div class="max-w-5xl mx-auto my-16">

        <div class="grid grid-cols-3 items-center">
            <div class="col-span-1">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80x80-white.png" alt="">
                </div>
            </div>
            <div class="col-span-2">
                <div>
                    <p class="text-5xl font-h1 text-white text-end">Dashboard</p>
                </div>
            </div>
        
        </div>

        <div class="grid grid-cols-3 gap-36 mx-14 mt-24">
           
            <div class="col-span-1">
                <button class="bg-white w-60 h-48 rounded-2xl" >
                    <a href="#" class="font-p font-semibold">Web Development, Hosting & Maintenance</a>
                </button>
            </div>

            <div class="col-span-1">
                <button class="bg-white w-60 h-48 rounded-2xl" >
                    <a href="#" class="font-p font-semibold">Web Development</a>
                </button>
            </div>

            <div class="col-span-1">
                <button class="bg-white w-60 h-48 rounded-2xl" >
                    <a href="#" class="font-p font-semibold">Hosting & Maintenance</a>
                </button>
            </div>

        </div>

        <div class="grid grid-cols-3 gap-36 mx-14 mt-24">
           
            <div class="col-span-1">
                <button class="bg-white w-60 h-48 rounded-2xl" >
                    <a href="#" class="font-p font-semibold">Hosting & Maintenance Renew</a>
                </button>
            </div>

            <div class="col-span-1">
                <button class="bg-white w-60 h-48 rounded-2xl" >
                    <a href="#" class="font-p font-semibold">Leave Request</a>
                </button>
            </div>

            <div class="col-span-1">
                <button class="bg-white w-60 h-48 rounded-2xl" >
                    <a href="#" class="font-p font-semibold">Payslip</a>
                </button>
            </div>

        </div>
        
    </div>

</div>

<?php get_footer(); ?>