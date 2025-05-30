import WhatsappQrCode from "../assets/whatsapp-qr-code.png";
import { FaPaperPlane } from "react-icons/fa6";

const ContactSection = () => {
  return (
    <section
      id="contact"
      aria-labelledby="contact-header"
      className="px-4 py-10 sm:px-16"
    >
      <header>
        <h2
          id="contact-header"
          className="pb-4 text-center text-4xl font-black"
        >
          CONTACT US
        </h2>
      </header>
      <div className="flex flex-col justify-center gap-4 md:flex-row">
        <form className="mb-8 flex h-full w-full flex-1 flex-col items-center justify-center gap-4 self-center px-4">
          <input
            className="w-full rounded-md border-3 px-4 py-2"
            type="text"
            placeholder="John Doe"
          />
          <input
            className="w-full rounded-md border-3 px-4 py-2"
            type="email"
            placeholder="johndoe@example.com"
          />
          <textarea
            id="message"
            className="w-full rounded-md border-3 px-4 py-2"
            name="message"
            placeholder="Write your message here..."
            rows={4}
          ></textarea>
          <button
            type="submit"
            className="from-brand-green to-brand-blue mt-4 flex items-center gap-2 rounded-lg bg-linear-to-r px-8 py-4 text-xl font-black text-white md:self-start"
          >
            Send Message <FaPaperPlane className="text-2xl" />
          </button>
        </form>
        <div className="mt-8 flex flex-1 items-center justify-center">
          <img
            className="border-brand-green -mt-8 w-80 max-w-full rounded-md border-6"
            src={WhatsappQrCode}
            alt="Whatsapp QR Code"
          />
        </div>
      </div>
    </section>
  );
};

export default ContactSection;
