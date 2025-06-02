import WhatsappQrCode from "../assets/whatsapp-qr-code.png";
import ContactForm from "./ContactForm";

const ContactSection = () => {
  return (
    <section
      id="contact"
      className="from-brand-green/25 to-brand-blue/25 bg-linear-to-r px-4 py-16 sm:px-8 sm:py-16 lg:px-16"
      aria-labelledby="contact-header"
    >
      <header>
        <h2
          id="contact-header"
          className="pb-8 text-center text-4xl font-black select-none sm:text-5xl md:text-6xl"
        >
          Contact Us
        </h2>
      </header>
      <div className="flex flex-col gap-4 md:flex-row md:gap-8">
        <ContactForm />
        <div className="flex flex-1 flex-col items-center gap-2">
          <h2 className="w-fit rounded-lg bg-black p-2 text-center text-xl font-bold text-white select-none">
            Whatsapp Code
          </h2>
          <a
            className="mt-4 flex flex-1 items-center justify-center sm:mt-8"
            href="https://wa.me/8767914187"
            target="_blank"
          >
            <img
              className="-mt-4 w-64 max-w-full self-start rounded-lg border-4 shadow-lg select-none sm:-mt-8 sm:w-80"
              src={WhatsappQrCode}
              alt="Whatsapp QR Code"
            />
          </a>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;
