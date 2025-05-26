import { FaWhatsapp, FaArrowDown } from "react-icons/fa6";

const HeroSection = () => {
  return (
    <header className="mt-24 grid min-h-[calc(100dvh-6rem)] grid-cols-1 bg-[url('./src/assets/landscape-placeholder.svg')] bg-cover bg-fixed bg-center bg-no-repeat">
      <section
        id="hero"
        className="flex flex-col items-center justify-center gap-4 p-4"
      >
        <h1 className="text-center text-4xl font-black">
          Welcome to Pure Zen Essence
        </h1>
        <div className="flex gap-4 font-bold">
          <a className="flex items-center gap-1 border-2" href="#about">
            Learn More <FaArrowDown />
          </a>
          <a className="flex items-center gap-1 border-2" href="#contact">
            Contact Us <FaWhatsapp />
          </a>
        </div>
      </section>
      <div></div>
    </header>
  );
};

export default HeroSection;
