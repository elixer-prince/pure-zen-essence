const AboutSection = () => {
  return (
    <section
      id="about"
      aria-labelledby="about-header"
      className="relative grid scroll-mt-24 grid-cols-1 gap-16 bg-linear-to-r from-neutral-950 to-neutral-900 p-16 text-white md:grid-cols-2"
    >
      {/* Left Container */}
      <div>
        <img
          className="absolute -top-16 flex aspect-square min-h-[calc(100dvh-6rem] w-1/2 items-center justify-center rounded-full border-4 border-white bg-amber-700 md:static"
          src=""
          alt="Image goes here..."
        />
      </div>
      {/* Right Container */}
      <div>
        <header>
          <h2
            id="about-header"
            className="border-brand-green border-b-8 pb-4 text-center text-4xl font-black"
          >
            ABOUT US
          </h2>
        </header>
        <div>
          <h3 className="mt-8 mb-4 text-center text-4xl font-bold">
            Our Mission
          </h3>
          <p>
            As a family-owned business, we are committed to cultivating
            high-quality products with care, integrity, and profound respect for
            the land. Through our hard work and shared values, we strive to
            nourish our community while safeguarding our legacy for future
            generations.
          </p>
        </div>
        <div>
          <h3 className="mt-8 mb-4 text-center text-4xl font-bold">
            Our Vision
          </h3>
          <p>
            Our vision is to be a trusted family business that nurtures enduring
            relationships, champions sustainable farming practices, and makes a
            meaningful impact on both our community and the environment.
          </p>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;
