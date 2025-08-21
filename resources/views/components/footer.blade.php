<footer
    class="selection:bg-brand-blue-500! flex flex-col items-center gap-12 bg-neutral-950 px-3 py-16 text-neutral-50 lg:px-24"
>
    <div
        class="flex w-full flex-col items-center justify-between gap-12 lg:flex-row lg:items-start"
    >
        <section id="contact" class="flex flex-col items-center gap-6">
            <h2 id="contact-header" class="text-h3/10 text-center font-bold">
                WhatsApp Us
            </h2>

            <img
                class="w-48"
                src="{{ asset("images/whatsapp-qr-code.png") }}"
                alt="WhatsApp QR Code"
            />
        </section>

        <div class="flex flex-col gap-6">
            <h2 class="text-h3/10 text-center font-bold">Give us a call</h2>

            <address class="font-regular text-subtitle text-center">
                <p>+1(876) 791 - 4187</p>
            </address>
        </div>

        <div class="flex flex-col items-center gap-6">
            <h2 class="text-h3/10 text-center font-bold">Social Links</h2>

            <ul
                class="flex w-fit justify-center gap-8 transition-all duration-700 hover:gap-12"
            >
                <li
                    class="hover:outline-brand-green-50 rounded-full outline-3 outline-offset-16 outline-transparent transition-all duration-700 hover:-translate-x-1 hover:-translate-y-1"
                >
                    <a
                        class="hover:text-brand-green-500 transition-colors duration-300"
                        href="https://instagram.com/purezenessence/"
                        target="_blank"
                    >
                        <i class="fa-brands fa-instagram text-4xl"></i>
                    </a>
                </li>
                <li
                    class="hover:outline-brand-green-50 rounded-full outline-3 outline-offset-16 outline-transparent transition-all duration-700 hover:translate-x-1 hover:-translate-y-1"
                >
                    <a
                        class="hover:text-brand-green-500 transition-colors duration-300"
                        href="https://tiktok.com/@purezenessence"
                        target="_blank"
                    >
                        <i class="fa-brands fa-tiktok text-4xl"></i>
                    </a>
                </li>
                <li
                    class="hover:outline-brand-green-50 rounded-full outline-3 outline-offset-16 outline-transparent transition-all duration-700 hover:translate-x-1 hover:-translate-y-1"
                >
                    <a
                        class="hover:text-brand-green-500 transition-colors duration-300"
                        href="https://www.facebook.com/profile.php?id=61563062753369"
                        target="_blank"
                    >
                        <i class="fa-brands fa-facebook text-4xl"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <p
        class="text-paragraph w-full border-t-4 border-neutral-500 pt-8 text-center font-bold"
    >
        Copyright &copy; Pure Zen Essence | {{ date("Y") }}
    </p>
</footer>
