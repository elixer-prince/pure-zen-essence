import WhatsappQrCode from "../assets/whatsapp-qr-code.png";

const ContactSection = () => {
  return (
    <section
      id="contact"
      aria-labelledby="contact-header"
      className="px-4 py-8"
    >
      <header>
        <h2
          id="contact-header"
          className="pb-4 text-center text-4xl font-black"
        >
          CONTACT US
        </h2>
      </header>
      <div className="flex flex-col gap-4 lg:flex-row">
        <form className="mb-8 flex flex-1 flex-col gap-4">
          <input
            className="rounded-md border-3 px-4 py-2"
            type="text"
            placeholder="John Doe"
          />
          <input
            className="rounded-md border-3 px-4 py-2"
            type="email"
            placeholder="johndoe@example.com"
          />
          <textarea
            id="message"
            className="rounded-md border-3 px-4 py-2"
            name="message"
            placeholder="Write your message here..."
            rows={4}
          ></textarea>
        </form>
        <div className="flex flex-1 items-center justify-center">
          <img
            className="border-brand-green max-w-full rounded-md border-8"
            src={WhatsappQrCode}
            alt="Whatsapp QR Code"
          />
        </div>
      </div>
    </section>
  );
};

export default ContactSection;
