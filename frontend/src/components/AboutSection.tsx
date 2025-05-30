import AboutImage from "./AboutImage";

const AboutSection = () => {
  return (
    // ABOUT SECTION
    <section
      id="about"
      aria-labelledby="about-header"
      className="relative flex scroll-mt-24 flex-col items-center justify-center gap-8 bg-linear-to-r from-black to-neutral-950 px-4 pt-28 pb-12 text-white sm:px-8 md:flex-row md:pt-36 lg:pt-12"
    >
      {/* Left Image Container */}
      <div className="absolute top-0 left-1/2 aspect-square min-h-[calc(100dvh-6rem] w-[12rem] flex-1/2 -translate-x-1/2 -translate-y-[50%] overflow-hidden rounded-full border-4 border-white md:w-[16rem] lg:static lg:w-1/2 lg:translate-0">
        <AboutImage />
      </div>
      {/* Right Text Container */}
      <div className="flex-2/3 p-4">
        <header>
          <h2
            id="about-header"
            className="border-brand-green border-b-8 pb-4 text-center text-4xl font-black md:text-6xl"
          >
            ABOUT <span className="hidden md:inline">US</span>
          </h2>
        </header>
        <div>
          <h3 className="border-brand-blue mt-8 mb-4 border-l-8 pb-2 pl-4 text-4xl font-bold md:text-6xl">
            Our Mission
          </h3>
          <p className="md:text-lg">
            As a family-owned business, we are committed to cultivating
            high-quality products with care, integrity, and profound respect for
            the land. Through our hard work and shared values, we strive to
            nourish our community while safeguarding our legacy for future
            generations.
          </p>
        </div>
        <div>
          <h3 className="border-brand-blue mt-8 mb-4 border-l-8 pb-2 pl-4 text-4xl font-bold md:text-6xl">
            Our Vision
          </h3>
          <p className="md:text-lg">
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
