import FaqQuestion from "./FaqQuestion";

const FaqSection = () => {
  return (
    <section
      id="faqs"
      className="bg-brand-blue scroll-mt-24 gap-4 px-24 py-16 pb-16"
      aria-labelledby="faqs-header"
    >
      <header>
        <h2
          id="faqs-header"
          className="pb-8 text-center text-4xl font-black text-white sm:text-5xl md:text-6xl"
        >
          FAQs
        </h2>
      </header>
      <div className="grid gap-4 lg:grid-cols-2">
        <div>
          <FaqQuestion question="What is Pure Zen Essence?" />
        </div>
        <div>
          <FaqQuestion question="What is Pure Zen Essence?" />
        </div>
        <div>
          <FaqQuestion question="What is Pure Zen Essence?" />
        </div>
        <div>
          <FaqQuestion question="What is Pure Zen Essence?" />
        </div>
      </div>
    </section>
  );
};

export default FaqSection;
