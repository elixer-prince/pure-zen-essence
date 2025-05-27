const AboutSection = () => {
  return (
    <section
      id="about"
      aria-labelledby="about-header"
      className="relative grid scroll-mt-24 grid-cols-1 gap-16 bg-linear-to-r from-neutral-950 to-neutral-900 p-16 pt-12 text-white md:grid-cols-2"
    >
      {/* Left Container */}
      <div>
        <img
          className="absolute top-0 left-1/2 flex aspect-square min-h-[calc(100dvh-6rem] w-[12rem] max-w-[100%] -translate-x-1/2 -translate-y-[50%] items-center justify-center rounded-full border-4 border-white md:static md:translate-0"
          src="https://images.unsplash.com/photo-1536147210925-5cb7a7a4f9fe?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JlZW4lMjBwbGFudHxlbnwwfHwwfHx8MA%3D%3D"
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
