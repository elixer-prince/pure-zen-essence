import { FaPaperPlane } from "react-icons/fa6";

const ContactForm = () => {
  return (
    <form
      className="mb-8 flex h-full w-full flex-1 flex-col items-center justify-center gap-6 self-center px-4 sm:px-8"
      action="https://formspree.io/f/xeokjzab"
      method="POST"
    >
      <div className="w-full">
        <label
          className="mb-2 inline-block text-lg font-bold select-none"
          htmlFor="name"
        >
          Full Name
        </label>
        <input
          id="name"
          className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
          type="text"
          name="name"
          placeholder="John Doe"
          required
        />
      </div>
      <div className="w-full">
        <label
          className="mb-2 inline-block text-lg font-bold select-none"
          htmlFor="email"
        >
          Email Address
        </label>
        <input
          id="email"
          className="w-full rounded-md border-3 px-4 py-2 text-base sm:text-lg"
          type="email"
          name="email"
          placeholder="johndoe@example.com"
          required
        />
      </div>
      <div className="w-full">
        <label
          className="mb-2 inline-block text-lg font-bold"
          htmlFor="message"
        >
          Message
        </label>
        <textarea
          id="message"
          className="w-full resize-none rounded-md border-3 px-4 py-2 text-base sm:text-lg"
          name="message"
          placeholder="Write your message here..."
          rows={4}
          required
        ></textarea>
      </div>
      <button
        type="submit"
        className="from-brand-green to-brand-blue mt-4 flex cursor-pointer items-center gap-2 rounded-lg bg-linear-to-r px-6 py-3 text-lg font-black text-white transition-all duration-300 select-none hover:scale-105 active:scale-95 sm:px-8 sm:py-4 sm:text-xl"
      >
        Send Email <FaPaperPlane className="text-xl sm:text-2xl" />
      </button>
    </form>
  );
};

export default ContactForm;
