import { FaPaperPlane } from "react-icons/fa6";

const ContactForm = () => {
  return (
    <form
      className="mb-4 flex h-full w-full flex-1 flex-col items-center justify-center gap-4 self-center px-4 sm:px-8"
      action="https://formspree.io/f/xeokjzab"
      method="POST"
    >
      <input
        className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
        type="text"
        name="name"
        placeholder="John Doe"
        required
      />
      <input
        className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
        type="email"
        name="email"
        placeholder="johndoe@example.com"
        required
      />
      <textarea
        id="message"
        className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
        name="message"
        placeholder="Write your message here..."
        rows={4}
        required
      ></textarea>
      <button
        type="submit"
        className="from-brand-green to-brand-blue mt-4 flex items-center gap-2 rounded-lg bg-linear-to-r px-6 py-3 text-lg font-black text-white sm:px-8 sm:py-4 sm:text-xl md:self-start"
      >
        Send Email <FaPaperPlane className="text-xl sm:text-2xl" />
      </button>
    </form>
  );
};

export default ContactForm;
