import WhatsappQrCode from "../assets/whatsapp-qr-code.png";
import { FaPaperPlane } from "react-icons/fa6";

const ContactSection = () => {
  return (
    <section
      id="contact"
      aria-labelledby="contact-header"
      className="px-4 py-8 sm:px-8 sm:py-16 lg:px-16"
    >
      <header>
        <h2
          id="contact-header"
          className="pb-4 text-center text-3xl font-black sm:text-4xl"
        >
          CONTACT US
        </h2>
      </header>
      <div className="flex flex-col gap-4 md:gap-8 lg:flex-row">
        <form className="mb-4 flex h-full w-full flex-1 flex-col items-center justify-center gap-4 self-center px-4 sm:px-8">
          <input
            className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
            type="text"
            placeholder="John Doe"
          />
          <input
            className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
            type="email"
            placeholder="johndoe@example.com"
          />
          <textarea
            id="message"
            className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
            name="message"
            placeholder="Write your message here..."
            rows={4}
          ></textarea>
          <button
            type="submit"
            className="from-brand-green to-brand-blue mt-4 flex items-center gap-2 rounded-lg bg-linear-to-r px-6 py-3 text-lg font-black text-white sm:px-8 sm:py-4 sm:text-xl md:self-start"
          >
            Send Email <FaPaperPlane className="text-xl sm:text-2xl" />
          </button>
        </form>
        <div className="mt-4 flex flex-1 items-center justify-center sm:mt-8">
          <img
            className="border-brand-darkblue -mt-4 w-64 max-w-full rounded-lg border-4 shadow-lg sm:-mt-8 sm:w-80"
            src={WhatsappQrCode}
            alt="Whatsapp QR Code"
          />
        </div>
      </div>
    </section>
  );
};

export default ContactSection;
