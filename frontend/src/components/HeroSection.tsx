import { FaWhatsapp, FaArrowDown } from "react-icons/fa6";

const HeroSection = () => {
  return (
    <header className="mt-24 flex min-h-[calc(100dvh-6rem)] flex-col bg-[url('./src/assets/')] bg-cover bg-fixed bg-center bg-no-repeat p-4 md:flex-row">
      <section id="hero" className="flex flex-col items-center gap-8 p-4">
        <div className="flex flex-col items-center gap-4">
          <h1 className="text-center text-5xl font-black">
            Welcome to{" " /* To add space is missing for some reason*/}
            <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-transparent">
              Pure Zen Essence
            </span>
          </h1>
        </div>
        <div className="flex gap-4 font-bold text-white">
          <a
            className="to-brand-darkblue flex items-center gap-1 rounded-lg bg-linear-to-r from-black px-4 py-3"
            href="#about"
          >
            Learn More <FaArrowDown className="text-xl" />
          </a>
          <a
            className="to-brand-blue from-brand-green flex items-center gap-1 rounded-lg bg-linear-to-r px-4 py-3"
            href="#contact"
          >
            Contact Us <FaWhatsapp className="text-2xl" />
          </a>
        </div>
      </section>
      <div></div>
    </header>
  );
};

export default HeroSection;
