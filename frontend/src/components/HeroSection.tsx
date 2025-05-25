const HeroSection = () => {
  return (
    <header className="mt-24 grid min-h-[calc(100dvh-6rem)] grid-cols-1 bg-[url('./src/assets/landscape-placeholder.svg')] bg-cover bg-fixed bg-top bg-no-repeat">
      <section id="hero" className="text-center">
        <h1>Pure Zen Essence</h1>
        <div>
          <button>Learn More</button>
          <button>Contact Us</button>
        </div>
      </section>
      <div></div>
    </header>
  );
};

export default HeroSection;
