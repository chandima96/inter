<?php
/*
	Template Name: Web Development
*/
get_header(); ?>


<div class="max-w-7xl mx-auto px-5 mt-16">

    <div class="grid grid-cols-3 items-center">
        <div class="col-span-1">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/80x80-black1.png" alt="">
            </div>
        </div>
        <div class="col-span-2">
            <div>
                <p class="text-5xl text-end font-chivo font-bold text-[#0f2b1a]">Web Development Quote</p>
            </div>
        </div>

    </div>

    <div class="flex justify-start mt-11">
        <h2 class="text-4xl font-chivo font-medium text-[#0f2b1a]" id="qNum">QN-1008</h2>
    </div>

    <div class="border border-black rounded-2xl mt-3 mb-16">
        <!-- <form action="">

            <div class="mx-20">

        

                <div class="grid grid-cols-3 mt-16">
                    <div class="col-span-2">
                        <div>
                            <h4 class="text-2xl font-medium font-poppins text-[#0f2b1a] mb-6">Client Information</h4>
                            <div class="mb-11">
                                <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Name</label>
                                <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Client Name">
                            </div>

                            <div class="mb-11">
                                <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Email address</label>
                                <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Client Email">
                            </div>

                            <div class="mb-11">
                                <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Street address</label>
                                <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Client Address">
                            </div>

                            <div class="grid grid-cols-2 gap-20">
                                <div class="col-span">
                                    <div class="mb-11">
                                        <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">City</label>
                                        <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="city" type="text" placeholder="City">
                                    </div>

                                    <div class="mb-11">
                                        <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Zip / Postal code</label>
                                        <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="pcode" type="text" placeholder="Zip / Postal code">
                                    </div>

                                    <div class="mb-11">
                                        <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Telephone number</label>
                                        <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Telephone">
                                    </div>
                                </div>

                                <div class="col-span">
                                    <div class="mb-11">
                                        <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">State / Province</label>
                                        <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="state" type="text" placeholder="State / Province">
                                    </div>

                                    <div class="mb-11">
                                        <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Country</label>
                                        <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="country" type="text" placeholder="Country">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        

        

                <div>
                    <h4 class="text-2xl font-medium font-poppins text-[#0f2b1a] mb-6">Service Information</h4>
                </div>

                    <div class="mb-11">
                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 1</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description1" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty1" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP1" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total1" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 2</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description2" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty2" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP2" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total2" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 3</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description3" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty3" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP3" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total3" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 4</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description4" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty4" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP4" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total4" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 5</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description5" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty5" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP5" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total5" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 6</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description6" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty6" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP6" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total6" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-5">
                            <div>
                                <div class="grid grid-cols-6 gap-10">
                                    <div class="col-span-3">
                                        <div>
                                            <label class="text-xl font-normal font-poppins mb-1">Description 7</label>
                                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="description7" type="text" placeholder="Description">
                                        </div>
                                    </div>

                                    <div class="col-span-3">
                                        <div  class="grid grid-cols-3 gap-10">
                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Quantity</label>
                                                <input class="border rounded w-full text-center font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="qty7" type="text">
                                            </div>

                                            <div class="text-center">
                                                <label class="text-xl font-normal font-poppins mb-1">Unit Price</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="unitP7" type="text">
                                            </div>

                                            <div class="text-end">
                                                <label class="text-xl font-normal font-poppins mb-1">Total</label>
                                                <input class="border rounded w-full text-end font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="total7" type="text">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="grid grid-cols-4 gap-20">
                    <div>
                        <div class="mb-11">
                            <label class="text-xl font-semibold font-poppins text-[#0f2b1a] mb-1">Discount</label>
                            <input class="border rounded w-full font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="discount">
                        </div>
                    </div>
                    <div>
                        <div class="mb-11">
                            <label class="text-xl font-semibold font-poppins text-[#0f2b1a] mb-1">Grand Total</label>
                            <input class="border rounded w-full font-semibold tabular-nums py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="gTotal">
                        </div>
                    </div>
                </div>

                <div class="mb-14">
                    <textarea class="border resize rounded-md py-2 px-3  text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" name="" id="" cols="112" rows="3" placeholder="Additional information" ></textarea>
                </div>

        
                <div>
                    <h4 class="text-2xl font-medium font-poppins text-[#0f2b1a] mb-6">Other Information</h4>
                </div>

                <div class="grid grid-cols-3 gap-24">
                    <div class="col-span-1">
                        <div class="mb-11">
                            <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Quotation number</label>
                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="quonum" type="text" placeholder="Number">
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="mb-11">
                            <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Date</label>
                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="todayDate" type="date">
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="mb-11">
                            <label class="text-xl font-normal font-poppins text-[#0f2b1a] mb-1">Estimated delivery date</label>
                            <input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-sky-500 focus:outline-none focus:shadow-outline" id="estDate" type="date">
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-10 mb-12">
                    <button class="bg-green-700 font-poppins text-center text-2xl font-medium text-white px-12 py-3 rounded-xl" id="changeButton">
                        Submit
                    </button>
                    <button class="bg-transparent text-center text-2xl font-medium hover:bg-red-500 text-gray-700  hover:text-white py-3 px-12 border border-red-500 hover:border-transparent rounded-xl">
                        Cancel
                    </button>
                </div>
            </div>

        </form> -->

        <?php echo do_shortcode('[contact-form-7 id="46b0e43" title="Web Development Quote Form"]'); ?>
    </div>
</div>



<?php get_footer(); ?>