import WhatsappQrCode from "../assets/whatsapp-qr-code.png";
import ContactForm from "./ContactForm";

const ContactSection = () => {
  return (
    <section
      id="contact"
      aria-labelledby="contact-header"
      className="px-4 py-16 sm:px-8 sm:py-16 lg:px-16"
    >
      <header>
        <h2
          id="contact-header"
          className="pb-8 text-center text-4xl font-black sm:text-5xl md:text-6xl"
        >
          CONTACT US
        </h2>
      </header>
      <div className="flex flex-col gap-4 md:flex-row md:gap-8">
        <ContactForm />
        <a
          className="mt-4 flex flex-1 items-center justify-center sm:mt-8"
          href="https://wa.me/8767914187"
          target="_blank"
        >
          <img
            className="border-brand-darkblue -mt-4 w-64 max-w-full rounded-lg border-4 shadow-lg sm:-mt-8 sm:w-80"
            src={WhatsappQrCode}
            alt="Whatsapp QR Code"
          />
        </a>
      </div>
    </section>
  );
};

export default ContactSection;
