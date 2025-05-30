import TestimonialCard from "./TestimonialCard";

const TestimonialSection = () => {
  return (
    <section
      id="testimonials"
      aria-labelledby="testimonials-header"
      className="scroll-mt-24 px-4 py-8"
    >
      <header>
        <h2
          id="testimonials-header"
          className="pb-4 text-center text-4xl font-black"
        >
          WHAT PEOPLE SAY
        </h2>
      </header>
      <div className="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
        <TestimonialCard />
        <TestimonialCard />
        <TestimonialCard />
        <TestimonialCard />
      </div>
    </section>
  );
};

export default TestimonialSection;
