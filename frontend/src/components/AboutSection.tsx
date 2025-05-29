import AboutImage from "./AboutImage";

const AboutSection = () => {
  return (
    // ABOUT SECTION
    <section
      id="about"
      aria-labelledby="about-header"
      className="relative grid scroll-mt-24 grid-cols-1 bg-linear-to-r from-black to-neutral-950 p-12 pt-28 text-white md:grid-cols-2"
    >
      {/* Left Image Container */}
      <div className="absolute top-0 left-1/2 aspect-square min-h-[calc(100dvh-6rem] w-[12rem] max-w-[100%] -translate-x-1/2 -translate-y-[50%] overflow-hidden rounded-full border-4 border-white md:static md:w-1/2 md:translate-0">
        <AboutImage />
      </div>
      {/* Right Text Container */}
      <div className="p-4">
        <header>
          <h2
            id="about-header"
            className="border-brand-green border-b-8 pb-4 text-center text-4xl font-black"
          >
            ABOUT
          </h2>
        </header>
        <div>
          <h3 className="border-brand-blue mt-8 mb-4 border-l-8 pb-2 pl-4 text-4xl font-bold">
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
          <h3 className="border-brand-blue mt-8 mb-4 border-l-8 pb-2 pl-4 text-4xl font-bold">
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
