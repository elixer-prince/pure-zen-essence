const AboutSection = () => {
  return (
    <section
      id="about"
      aria-labelledby="about-header"
      className="grid scroll-mt-24 grid-cols-1 gap-16 bg-black p-16 text-white lg:grid-cols-2"
    >
      {/* Left Container */}
      <div className="border-2 border-amber-500">
        <img src="" alt="Image goes here..." />
      </div>
      {/* Right Container */}
      <div>
        <header>
          <h2
            id="about-header"
            className="border-brand-green border-b-8 pb-4 text-center text-4xl font-extrabold"
          >
            ABOUT US
          </h2>
        </header>
        <div>
          <h3>Our Mission</h3>
        </div>
        <div>
          <h3>Our Vision</h3>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;
