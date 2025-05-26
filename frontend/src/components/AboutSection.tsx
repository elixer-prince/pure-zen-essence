const AboutSection = () => {
  return (
    <section
      id="about"
      aria-labelledby="about-header"
      className="scroll-mt-24 p-4"
    >
      <div>
        <img src={"/"} alt="" />
      </div>
      <div>
        <header>
          <h2 id="about-header" className="text-center text-3xl font-extrabold">
            ABOUT US
          </h2>
        </header>
      </div>
    </section>
  );
};

export default AboutSection;
