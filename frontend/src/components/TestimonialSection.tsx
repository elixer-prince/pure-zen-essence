import TestimonialCard from "./TestimonialCard";

const TestimonialSection = () => {
  return (
    <section
      id="testimonials"
      aria-labelledby="testimonials-header"
      className="relative flex min-h-[80vh] w-full flex-col items-center justify-center px-4 py-16 sm:py-16 md:py-24 lg:py-32"
    >
      <div className="relative flex w-full max-w-6xl flex-col items-center gap-12">
        <header>
          <h2
            id="testimonials-header"
            className="text-center text-4xl font-black sm:text-5xl md:text-6xl"
          >
            WHAT PEOPLE SAY
          </h2>
        </header>
        <div className="grid w-full grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <TestimonialCard />
          <TestimonialCard />
          <TestimonialCard />
          <TestimonialCard />
        </div>
      </div>
    </section>
  );
};

export default TestimonialSection;
