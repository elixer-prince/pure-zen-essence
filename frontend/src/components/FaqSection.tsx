import FaqQuestion from "./FaqQuestion";

const FaqSection = () => {
  return (
    <section
      id="faqs"
      className="scroll-mt-24 gap-4 bg-neutral-100 px-4 py-8 pb-16"
      aria-labelledby="faqs-header"
    >
      <header>
        <h2
          id="faqs-header"
          className="pb-8 text-center text-4xl font-black sm:text-5xl md:text-6xl"
        >
          FAQs
        </h2>
      </header>
      <div className="grid gap-4 lg:grid-cols-2">
        <FaqQuestion />
        <FaqQuestion />
        <FaqQuestion />
        <FaqQuestion />
      </div>
    </section>
  );
};

export default FaqSection;
