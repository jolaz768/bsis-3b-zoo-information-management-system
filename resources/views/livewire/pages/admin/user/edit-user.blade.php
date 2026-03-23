<div>
    <!-- Card Section -->
    <div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-layer rounded-xl shadow-xs p-4 sm:p-7">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-foreground">
                    Edit Your Account
                </h2>
            </div>

            <form>
                <!-- Section -->
                <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-layer-line">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium text-foreground">
                        Personal information
                    </label>

                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-contact" type="text"
                            class="py-1.5 sm:py-2 px-3 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="First Name">
                        <input type="text"
                            class="py-1.5 sm:py-2 px-3 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Last Name">
                        <input type="text"
                            class="py-1.5 sm:py-2 px-3 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Phone Number">
                    </div>
                </div>
                <!-- End Section -->

                <!-- Section -->
                <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-layer-line">
                    <label for="af-payment-billing-address" class="inline-block text-sm font-medium text-foreground">
                        Personal address
                    </label>

                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-address" type="text"
                            class="py-1.5 sm:py-2 px-3 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Street Address">
                        <input type="text"
                            class="py-1.5 sm:py-2 px-3 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Apt, Syuite, Building (Optional)">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="text"
                                class="py-1.5 sm:py-2 px-3 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Zip Code">
                            <select
                                class="py-1.5 sm:py-2 px-3 pe-9 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                                <option selected>City</option>
                                <option>City 1</option>
                                <option>City 2</option>
                                <option>City 3</option>
                            </select>
                            <select
                                class="py-1.5 sm:py-2 px-3 pe-9 block block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                                <option selected>State</option>
                                <option>State 1</option>
                                <option>State 2</option>
                                <option>State 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End Section -->
            </form>

            <div class="mt-5 flex justify-end gap-x-2">
                <button type="button"
                    class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none">
                    Cancel
                </button>
                <button type="button"
                    class="py-1.5 sm:py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                </button>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</div>
