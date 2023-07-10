<footer class="text-white">
    <!-- Footer Section: Links and Brand Logo -->
    <div id="footerLinks" class="w-full my-0 mx-auto flex items-center flex-col bg-cover">
        <section class="max-w-5xl w-full flex justify-center md:justify-between">

            <!-- All Links -->
            <div class="w-4/5 md:w-3/5 flex justify-center md:justify-start gap-[2rem] px-[0.5em] py-7">

                <!-- 1° column of links: DC Comics & Shop -->
                <div>
                    <h3 class="text-sm font-bold mb-3">DC COMICS</h3>
                    <ul>
                        @foreach ($navItems as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h3 class="text-sm font-bold mt-5 mb-3">SHOP</h3>
                    <ul>
                        <li>
                            <a href="#">Shop DC</a>
                        </li>
                        <li>
                            <a href="#">Shop DC Collectibles</a>
                        </li>
                    </ul>
                </div>

                <!-- 2° column of links: DC -->
                <div>
                    <h3 class="text-sm font-bold mb-3">DC</h3>
                    <ul>
                        @foreach ($footerArray['dcItems'] as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- 3° column of links: Sites -->
                <div>
                    <h3 class="text-sm font-bold mb-3">SITES</h3>
                    <ul>
                        @foreach ($footerArray['sitesItems'] as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

            <!-- DC Brand Logo -->
            <div class="md:w-2/5 bg-cover bg-center hidden md:block"></div>

        </section>

    </div>

    <!-- Final Footer Section: CTA and Social Links -->
    <div class="bg-tertiaryGrey w-full my-0 mx-auto flex items-center flex-col">
        <section class="max-w-5xl w-full h-24 items-center flex p-[0.5em] justify-between">

            <!-- SIGN-UP Button -->
            <button class="border-2 border-primaryBlu text-[0.6rem] md:text-sm font-bold p-3 hover:bg-primaryBlu">SIGN-UP NOW</button>

            <!-- Social Links -->
            <div class="flex gap-2.5 items-center">
                <h3 class="font-bold text-primaryBlu text-xs md:text-base">FOLLOW US</h3>
                <ul class="flex justify-evenly md:gap-2.5">
                    @foreach ($footerArray['socialLinks'] as $item)
                        <li>
                            <a href="#">
                                <img src="{{ Vite::asset("resources/img/".$item['path']) }}" alt="{{$item['alt']}}" class="w-3/4 md:w-full">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
</footer>
