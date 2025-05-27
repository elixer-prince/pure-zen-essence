const AboutSection = () => {
  return (
    <section
      id="about"
      aria-labelledby="about-header"
      className="grid scroll-mt-24 grid-cols-1 p-4"
    >
      <div className="border-2 border-amber-500">
        <img src="" alt="Image goes here..." />
      </div>
      <div className="border-2 border-amber-500">
        <header>
          <h2 id="about-header" className="text-center text-3xl font-extrabold">
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
